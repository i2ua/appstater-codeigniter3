<?php

class Home extends CI_Controller
{
	public function index()
	{
        $this->load->model('content/post_model');
        $this->load->model('content/comment_model');

        $data['title'] = 'Home';
        $data['logged'] = $this->user->isLogged();
        $data['username'] = $this->user->getUsername();
        $data['total'] = $this->post_model->getTotals();

        $options = array(
            'limit' => 9,
            'offset' => 0
        );

        $data['posts'] = $this->post_model->getPosts($options);
        $data['comments'] = $this->comment_model->getComments($options);

		$this->load->view('layout/header', $data);
		$this->load->view('home', $data);
		$this->load->view('layout/footer', $data);
	}
}
