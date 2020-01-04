<?php

class Post_model extends CI_Model
{
    public function addPost($data)
    {
        $this->db->query("INSERT INTO `post` SET `user_id` = '" . (int) $data['user_id']. "', `title` = " . $this->db->escape($data['title']) . ", content = " . $this->db->escape($data['content']) . ",  `date_added` = NOW()");

        return $this->db->insert_id();
    }

    public function getPost($id)
    {
        $query = $this->db->query("SELECT DISTINCT `post`.*, (SELECT `user`.`username` FROM `user` WHERE `user`.`id`=`post`.`user_id`) as author FROM `post` WHERE `post`.`id` = '" . (int)$id . "'");

        return $query->row();
    }

    public function getPosts()
    {
        $sql = 'SELECT `post`.*, (SELECT `user`.`username` FROM `user` WHERE `user`.`id`=`post`.`user_id`) as author FROM `post`';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getTotalPosts()
    {
        $sql = "SELECT COUNT(*) AS total FROM `post`";

        $query = $this->db->query($sql);

        return $query->row('total');
    }
}
