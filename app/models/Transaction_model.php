<?php

class Transaction_model
{
    private $view = 'v_transaction';
    private $view_payment = 'v_transaction_payment';
    private $table = 't_transaction';
    private $table_detail = 't_transaction_detail';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }




    public function getSingleRowByStatus($data)
    {
        $this->db->query('SELECT * FROM ' . $this->view . ' WHERE user_id = :user_id AND transaction_status = :transaction_status ');
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('transaction_status',$data['transaction_status']);
      
         return $this->db->single();
    }
  
    public function getSingleRowById($data)
    {
        $this->db->query('SELECT * FROM ' . $this->view . ' WHERE user_id = :user_id AND transaction_status = :transaction_status ');
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('transaction_status',$data['transaction_status']);
      
         return $this->db->single();
    }
    public function getRowByMenu($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table_detail . ' WHERE menu_id = :menu_id AND transaction_id = :transaction_id');
        $this->db->bind('menu_id',$id['menu_id']);
        $this->db->bind('transaction_id',$id['transaction_id']);
      
         return $this->db->single();
    }

    public function getLastRow()
    {
        $this->db->query('SELECT max(transaction_invoice_code) AS code FROM ' . $this->table);
     
        return $this->db->single();
    }

    public function getRowById($id)
    {
        $this->db->query('SELECT * FROM '. $this->view. ' WHERE transaction_id = :transaction_id');
        $this->db->bind('transaction_id',$id);
        return $this->db->resultSet();
    }
    public function getSingleRowByTransactionId($id)
    {
        $this->db->query('SELECT * FROM '. $this->view. ' WHERE transaction_id = :transaction_id');
        $this->db->bind('transaction_id',$id);
        return $this->db->single();
    }
    public function getRowByTransaction($id)
    {
        $this->db->query('SELECT * FROM '. $this->view_payment. ' WHERE user_id = :user_id AND transaction_status != "Keranjang"');
        $this->db->bind('user_id',$id);
        return $this->db->resultSet();
    }

    public function getRowByTransactionStatus($data)
    {
        $this->db->query('SELECT * FROM ' . $this->view_payment . ' WHERE user_id = :user_id AND transaction_status = :transaction_status ');
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('transaction_status',$data['transaction_status']);
      
         return $this->db->resultSet();
    }

    public function getDetailRowById($id)
    {
        $this->db->query('SELECT * FROM '. $this->view. ' WHERE transaction_detail_id = :transaction_detail_id ');
        $this->db->bind('transaction_detail_id',$id);
        return $this->db->resultSet();
    }
    public function getSingleDetailRowById($id)
    {
        $this->db->query('SELECT * FROM '. $this->view. ' WHERE transaction_detail_id = :transaction_detail_id ');
        $this->db->bind('transaction_detail_id',$id);
        return $this->db->single();
    }

    public function getDetailRowByTransactionId($id)
    {
        $this->db->query('SELECT * FROM '. $this->table_detail. ' WHERE transaction_id = :transaction_id ');
        $this->db->bind('transaction_id',$id);
        return $this->db->resultSet();
    }
  

 

    public function postInsertRow($data)
    {
        $query ="INSERT INTO ". $this->table ."
                VALUES
                ('',CURRENT_TIMESTAMP, '',:user_id, '', :transaction_status,'', :transaction_category,'','','','')";

        $this->db->query($query);
        $this->db->bind('user_id',$data['user_id']);
        $this->db->bind('transaction_status',$data['transaction_status']);
        $this->db->bind('transaction_category',$data['transaction_category']);
       
       
       

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function postInsertDetailRow($data)
    {
        $query ="INSERT INTO ". $this->table_detail ."
                VALUES
                ('', :transaction_id, :menu_id, :transaction_detail_qty, :transaction_detail_price_total, :transaction_detail_note)";

        $this->db->query($query);
        $this->db->bind('transaction_id',$data['transaction_id']);
        $this->db->bind('menu_id',$data['menu_id']);
        $this->db->bind('transaction_detail_qty',$data['transaction_detail_qty']);
        $this->db->bind('transaction_detail_price_total',$data['transaction_detail_price_total']);
        $this->db->bind('transaction_detail_note',$data['transaction_detail_note']);
       
       
       
        $this->db->execute();

        return $this->db->rowCount();
    }
    // public function postUpdateDetailRow($data)
    // {
    //     $query ="UPDATE ". $this->table_detail ."
    //             SET  menu_id = :menu_id, 
    //                  transaction_detail_qty = :transaction_detail_qty,
    //                  transaction_detail_price_total = :transaction_detail_price_total,
    //                  transaction_detail_note = :transaction_detail_note
    //             WHERE transaction_detail_id = :transaction_detail_id";

    //     $this->db->query($query);
    //     $this->db->bind('transaction_detail_id',$data['transaction_detail_id']);
    //     $this->db->bind('menu_id',$data['menu_id']);
    //     $this->db->bind('transaction_detail_qty',$data['transaction_detail_qty']);
    //     $this->db->bind('transaction_detail_price_total',$data['transaction_detail_price_total']);
    //     $this->db->bind('transaction_detail_note',$data['transaction_detail_note']);
       
       
       
    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
    public function postUpdateRowByEditItem($data)
    {
        $query ="UPDATE ". $this->table_detail ."
                SET  transaction_detail_qty = :transaction_detail_qty,
                     transaction_detail_price_total = :transaction_detail_price_total,
                     transaction_detail_note = :transaction_detail_note
                WHERE transaction_detail_id = :transaction_detail_id";

        $this->db->query($query);
        $this->db->bind('transaction_detail_id',$data['transaction_detail_id']);
        $this->db->bind('transaction_detail_qty',$data['transaction_detail_qty']);
        $this->db->bind('transaction_detail_price_total',$data['transaction_detail_price_total']);
        $this->db->bind('transaction_detail_note',$data['transaction_detail_note']);
       

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function postUpdateRowByPayment($data)
    {
        $query ="UPDATE ". $this->table ."
                SET  transaction_method = :transaction_method,
                     transaction_image = :transaction_image,
                     transaction_status = :transaction_status
                WHERE transaction_id = :transaction_id";

        $this->db->query($query);
        $this->db->bind('transaction_id',$data['transaction_id']);
        $this->db->bind('transaction_image',$data['transaction_image']);
        $this->db->bind('transaction_status',$data['transaction_status']);
        $this->db->bind('transaction_method',$data['transaction_method']);
       

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function postDeleteRowById($id){
        $query ="DELETE FROM ". $this->table ."
                WHERE transaction_id = :transaction_id";

        $this->db->query($query);
        $this->db->bind('transaction_id',$id);
     
        $this->db->execute();

        return $this->db->rowCount();
                
    }

    public function postDeleteRowByDeleteItem($data){
        $query ="DELETE FROM ". $this->table_detail ."
                WHERE transaction_detail_id = :transaction_detail_id";

        $this->db->query($query);
        $this->db->bind('transaction_detail_id',$data);
     
        $this->db->execute();

        return $this->db->rowCount();
                
    }



 public function postUpdateRowByBoxed($data)
    {
        $query ="UPDATE ". $this->table ."
                SET  transaction_invoice_code = :transaction_invoice_code,
                     transaction_status = :transaction_status,
                     transaction_customer_name = :transaction_customer_name,
                     transaction_customer_phone_number = :transaction_customer_phone_number,
                     transaction_customer_address = :transaction_customer_address
                WHERE transaction_id = :transaction_id";

        $this->db->query($query);
        $this->db->bind('transaction_id',$data['transaction_id']);
        $this->db->bind('transaction_invoice_code',$data['transaction_invoice_code']);
        $this->db->bind('transaction_status',$data['transaction_status']);
        $this->db->bind('transaction_customer_name',$data['transaction_customer_name']);
        $this->db->bind('transaction_customer_phone_number',$data['transaction_customer_phone_number']);
        $this->db->bind('transaction_customer_address',$data['transaction_customer_address']);
       
       

        $this->db->execute();

        return $this->db->rowCount();
    }
  

   
}