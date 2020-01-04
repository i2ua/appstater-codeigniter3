<?php

class User_model extends CI_Model
{
    public function addUser($data)
    {
        $this->db->query("INSERT INTO `user` SET `username` = " . $this->db->escape($data['username']) . ", `email` = " . $this->db->escape($data['email']) . ", password = " . $this->db->escape(password_hash($data['password'], PASSWORD_DEFAULT)) . ", `date_added` = NOW()");

        return $this->db->insert_id();
    }

    public function getUserByEmail($email)
    {
        $query = $this->db->query("SELECT * FROM `user` WHERE LOWER(email) = " . $this->db->escape(strtolower($email)));

        if ($query->num_rows()) {
            return $query->row();
        }

        return null;
    }

    public function editPassword($id, $password)
    {
        $this->db->query("UPDATE `user` SET  password = " . $this->db->escape($password) . " WHERE `id` = '" . (int)$id . "'");
    }

    public function getTotalUsers()
    {
        $sql = "SELECT COUNT(*) AS total FROM `user`";

        $query = $this->db->query($sql);

        return $query->row('total');
    }
}
