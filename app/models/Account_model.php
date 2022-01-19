<?php
class Account_model
{
    private $table = 'm_user';
    private $db;
  

    public function __construct()
    {
      $this->db = new Database;

    }

   
    public function getRowByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_email = :user_email');
        $this->db->bind('user_email',$email);
      
        return $this->db->single();
    }
    public function getRowById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id');
        $this->db->bind('user_id',$id);
      
        return $this->db->single();
    }
    public function getRowByLogin($login)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_email = :user_email AND user_password = :user_password');
        $this->db->bind('user_email',$login['user_email']);
        $this->db->bind('user_password',$login['user_password']);
      
        return $this->db->single();
    }

    public function postUpdateRowById($data)
    {
        $query ="UPDATE ". $this->table ."
                SET user_password = :user_password
                WHERE user_id = :user_id";

        $this->db->query($query);
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('user_password',$data['user_password']);
      

        $this->db->execute();

        return $this->db->rowCount();
      
        // return $this->db->single();
    }

    public function postInsertRow($data)
    {
        $query ="INSERT INTO ". $this->table ."
                VALUES
                ('',CURRENT_TIMESTAMP, :user_name, :user_email, :user_phone_number, :user_address, :user_password)";

        $this->db->query($query);
        $this->db->bind('user_name',$data['user_name']);
        $this->db->bind('user_email',$data['user_email']);
        $this->db->bind('user_phone_number',$data['user_phone_number']);
        $this->db->bind('user_address',$data['user_address']);
        $this->db->bind('user_password',$data['user_password']);
       
       

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function postUpdateRow($data)
    {
        $query ="UPDATE ". $this->table ."
                SET user_name = :user_name,
                    user_email = :user_email,
                    user_phone_number = :user_phone_number,
                    user_address = :user_address,
                    user_password = :user_password

                WHERE user_id = :user_id";

        $this->db->query($query);
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('user_name',$data['user_name']);
        $this->db->bind('user_email',$data['user_email']);
        $this->db->bind('user_phone_number',$data['user_phone_number']);
        $this->db->bind('user_address',$data['user_address']);
        $this->db->bind('user_password',$data['user_password']);
      

        $this->db->execute();

        return $this->db->rowCount();
      
    }


    public function postDeleteRowById($id){
        $query ="DELETE FROM ". $this->table ."
                WHERE user_id = :user_id";

        $this->db->query($query);
        $this->db->bind('user_id',$id);
     
        $this->db->execute();

        return $this->db->rowCount();
                
    }
}