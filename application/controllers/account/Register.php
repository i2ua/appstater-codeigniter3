<?php

class Register extends CI_Controller
{
	public function index()
	{
        $data['error'] = '';

        $this->setFormValidation();

        if ($this->form_validation->run() === true) {

            $this->load->model('account/user_model');

            if (!$this->user_model->getUserByEmail($this->input->post('email'))) {
                $this->user_model->addUser($this->input->post());
                $this->user->login($this->input->post('email'), $this->input->post('password'));
                redirect(base_url());
            }

            $data['error'] = 'E-Mail Address is already registered!';
        }

        $this->load->view('layout/login_header');
        $this->load->view('account/register', $data);
        $this->load->view('layout/login_footer');
	}

    protected function setFormValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username',
            'trim|required|min_length[3]|max_length[255]',
            array(
                'required' => 'You have not provided %s.',
                'min_length' => '%s must be more than 3 characters.',
                'max_length' => '%s must be less than 255 characters.'
            )
        );

        $this->form_validation->set_rules('email', 'Email',
            'trim|required|valid_email|max_length[96]',
            array(
                'required' => 'You have not provided %s.',
                'valid_email' => '%s does not appear to be valid.',
                'max_length' => '%s must be less than 96 characters.'
            )
        );

        $this->form_validation->set_rules('password', 'Password',
            'trim|required|min_length[4]|max_length[64]',
            array(
                'required' => 'You have not provided %s.',
                'min_length' => '%s must be more than 4 characters.',
                'max_length' => '%s must be less than 64 characters.'
            )
        );

        $this->form_validation->set_rules('confirm', 'Password Confirmation',
            'trim|required|matches[password]',
            array(
                'required' => 'You have not provided %s.',
                'matches' => 'Your %s do not matches.'
            )
        );
    }
}
