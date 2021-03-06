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
        $query = $this->db->query("SELECT DISTINCT `post`.*, (SELECT  DISTINCT `user`.`username` FROM `user` WHERE `user`.`id`=`post`.`user_id`) as author FROM `post` WHERE `post`.`id` = '" . (int)$id . "'");

        return $query->row();
    }

    public function getPosts($options = array())
    {
        $sql = 'SELECT `post`.*, (SELECT DISTINCT `user`.`username` FROM `user` WHERE `user`.`id`=`post`.`user_id`) as author FROM `post` ORDER BY `post`.`date_added` DESC';

        if (isset($options['offset'], $options['limit'])) {
            $sql .= " LIMIT " . (int)$options['limit'] . " OFFSET " . (int)$options['offset'];
        }

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getTotalPosts()
    {
        $sql = "SELECT COUNT(*) AS total FROM `post`";

        $query = $this->db->query($sql);

        return $query->row('total');
    }

    public function getTotals()
    {
        $sql = "SELECT COUNT(*) AS posts, (SELECT COUNT(*) FROM `user`) as users, (SELECT COUNT(*) FROM `comment`) as comments FROM `post`" ;

        $query = $this->db->query($sql);

        return $query->row();
    }
}
