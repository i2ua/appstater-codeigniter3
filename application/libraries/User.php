<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User
{
    private $id;
    private $username;
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');

        if (isset($this->CI->session->user)) {
            $this->id = $this->CI->session->user['id'];
            $this->username = $this->CI->session->user['username'];
        }
    }

    public function login($email, $password)
    {
        $this->CI->load->library('session');

        $query = $this->CI->db->query("SELECT * FROM `user` WHERE LOWER(email) = " . $this->CI->db->escape(strtolower($email)));

        if ($query->num_rows()) {

            $row = $query->row();

            if (password_verify($password, $row->password)) {
                if (password_needs_rehash($row->password, PASSWORD_DEFAULT)) {
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                }
            } else {
                $this->logout();
                return false;
            }

            $this->CI->session->user = [];

            $this->id = $this->CI->session->user['id'] = $row['id'];
            $this->username = $this->CI->session->user['username'] = $row['username'];

            if (isset($hash)) {
                $this->CI->db->query("UPDATE `user` SET  password = " . $this->CI->db->escape($hash) . " WHERE `id` = '" . (int)$this->id . "'");
            }

            return true;
        }

        $this->logout();
        return false;
    }

    public function logout()
    {
        $this->CI->load->library('session');
        $this->CI->session->unset_userdata('user');

        $this->id = 0;
        $this->username = 'Guest';
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function isLogged()
    {
        return (bool)$this->id;
    }
}
