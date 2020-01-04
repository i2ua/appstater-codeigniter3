<?php

class Login extends CI_Controller
{
    public function index()
    {
        $data['error'] = '';

        $this->setFormValidation();

        if ($this->form_validation->run() === true) {
            if ($this->user->login($this->input->post('email'), $this->input->post('password'))) {
                redirect(base_url());
            }

            $data['error'] = 'No match for Email and/or Password!';
        }

        $this->load->view('layout/login_header');
        $this->load->view('account/login', $data);
        $this->load->view('layout/login_footer');
    }

    protected function setFormValidation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


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
    }
}
