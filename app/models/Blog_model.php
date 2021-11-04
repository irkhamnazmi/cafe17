<?php

class Blog_model
{
    private $view = 'v_blog';
    private $db;

    public function __construct()
    {
      $this->db = new Database;

    }

    public function getAllRow()
    {
        $this->db->query('SELECT * FROM ' . $this->view . ' ORDER BY blog_id DESC');
        return $this->db->resultSet();
    }
    public function getRowByKeyword($key)
    {
        $this->db->query('SELECT * FROM ' . $this->view . ' WHERE blog_id = :blog_id AND blog_title = :blog_title');
        $this->db->bind('blog_id',$key['blog_id']);
        $this->db->bind('blog_title',$key['blog_title']);
        return $this->db->resultSet();
    }
}