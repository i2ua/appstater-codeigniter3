<?php

class Post extends CI_Controller
{
    public function index()
    {
        $this->load->model('content/post_model');
        $this->load->model('content/comment_model');

        $this->setCommentValidation();

        $data = (array)$this->post_model->getPost($this->input->get('id'));
        $data['logged'] = $this->user->isLogged();

        if ($this->form_validation->run() === true) {
            if (!$data['logged']) {
                redirect(base_url('account/login'));
            }

            $comment = $this->input->post();
            $comment['parent_id'] = isset($comment['parent_id']) ?: 0;
            $comment['post_id'] = $this->input->get('id');
            $comment['user_id'] = $this->user->getId();
            $comment['author'] = $this->user->getUsername();

            $this->comment_model->addComment($comment);;
        }

        $data['comments'] = $this->comment_model->getComments($this->input->get('id'));

        $data['header'] = $this->load->view('layout/header', $data, true);
        $data['footer'] = $this->load->view('layout/footer', $data, true);
        $this->load->view('content/post', $data);
    }

    public function add()
    {
        if (!$this->user->isLogged()) {
            redirect(base_url('account/login'));
        }

        $data = array();

        $this->setValidation();

        if ($this->form_validation->run() === true) {
            $this->load->model('content/post_model');
            $post = $this->input->post();
            $post['user_id'] = $this->user->getId();
            $this->post_model->addPost($post);
            redirect(base_url());
        }

        $data['header'] = $this->load->view('layout/header', $data, true);
        $data['footer'] = $this->load->view('layout/footer', $data, true);
        $this->load->view('content/post_form', $data);
    }

    protected function setValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title',
            'trim|required|max_length[255]',
            array(
                'required' => 'You have not provided %s.',
                'max_length' => '%s must be less than 96 characters.'
            )
        );

        $this->form_validation->set_rules('content', 'Post Content',
            'trim|required',
            array(
                'required' => 'You have not provided %s.',
            )
        );
    }

    protected function setCommentValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('comment', 'Comment',
            'trim|required|min_length[3]|strip_tags',
            array(
                'required' => 'You have not provided %s.',
                'min_length' => '%s must be more than 4 characters.',
            )
        );
    }
}
