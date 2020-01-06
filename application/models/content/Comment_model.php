<?php

class Comment_model extends CI_Model
{
    public function addComment($data)
    {
        $this->db->query("INSERT INTO `comment` SET `parent_id` = '" . (int)$data['parent_id'] . "', `post_id` = '" . (int)$data['post_id'] . "', `user_id` = '" . (int) $data['user_id'] . "', `author` = " . $this->db->escape($data['author']) . ", `text` = " . $this->db->escape(strip_tags($data['text'])) . ", `date_added` = NOW()");

        return $this->db->insert_id();
    }

    public function getComment($id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM `comment` WHERE id = '" . (int)$id . "'");

        return $query->row();
    }

    public function getComments($options = array())
    {
        $sql = 'SELECT * FROM `comment` ORDER BY `date_added` DESC';

        if (isset($options['offset'], $options['limit'])) {
            $sql .= " LIMIT " . (int)$options['limit'] . " OFFSET " . (int)$options['offset'];
        }

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getTotalComments()
    {
        $sql = "SELECT COUNT(*) AS total FROM `comment`";

        $query = $this->db->query($sql);

        return $query->row('total');
    }
}
