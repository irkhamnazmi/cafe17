<?php 

class Menu_model{

    private $table = 'm_menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRow()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getTop3Row()
    {
        $this->db->query('SELECT * FROM '.$this->table.' LIMIT 3');
        return $this->db->resultSet();
    }
   
   
    public function getAllTopRow()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }


    public function getRowByKeyword($key)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE menu_id = :menu_id AND menu_name = :menu_name');
        $this->db->bind('menu_id',$key['menu_id']);
        $this->db->bind('menu_name',$key['menu_name']);
        return $this->db->resultSet();
    }
    public function getRowByCategory($category)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE menu_category = :menu_category');
        $this->db->bind('menu_category',$category);
     
        return $this->db->resultSet();
    }
}