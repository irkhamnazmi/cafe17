<?php


class transaction extends Controller
{   
   
     public function index()
    {
       $user =  [
            'user_id' => $_SESSION['user_account']['id'],
            'transaction_status' => 'Keranjang',
             
       ];
       
       if(empty($user['user_id'])){
          
           header('Location: ' . BASEURL);
       }
       $status = $this->model('Transaction_model')->getSingleRowByStatus($user);    
        $data = [
            'page' => $user['transaction_status'],
            'row' => $this->model('Account_model')->getRowById($user['user_id']),
            'rowId' => $status,
            'display'=> 'display:block;'
           
         
             ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('transaction/index', $data);
        $this->view('template/footer', $data);

        echo "<script>$('#detail').load(baseurl + '/transaction/detaildata');</script>";
    }

    public function payment()
    {
       $user = $_SESSION['user_account']['id'];
       
       if(empty($user)){
          
           header('Location: ' . BASEURL);
       }
     
       $data = [
            'category' => 'Semua Transaksi',
            'row' => $this->model('Transaction_model')->getRowByTransaction($user) 
         ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('transaction/payment', $data);
        $this->view('template/footer', $data);

        // echo "<script>$('#detail').load(baseurl + '/transaction/detaildata');</script>";
    }

    public function filter($category)
    {
        $data = [
            'page' => 'Pembayaran',
            'category' => $category,
            'row' => $this->model('Transaction_model')->getRowByCategory($category)
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('transaction/payment', $data);
        $this->view('template/footer', $data);
    }

    // public function getdetail_id(){
    //     // echo 'Berhasil';
    //     echo json_encode($this->model('Transaction_model')->getSingleDetailRowById($_POST['transaction_detail_id']));
    // }


    public function editItem(){
        
        $data  = [
            'transaction_detail_id' => $_POST['transaction_detail_id'],
            'transaction_detail_qty' => $_POST['transaction_detail_qty'],
            'transaction_detail_price_total' => $_POST['transaction_detail_price_total'],
            'transaction_detail_note' => $_POST['transaction_detail_note']

        ];
        // echo json_encode($data);

        $x =  $this->model('Transaction_model')->postUpdateRowByEditItem($data);
        if($x){
            $row = $this->model('Transaction_model')->getSingleDetailRowById($data['transaction_detail_id']);
            echo json_encode($row);

        }else{
            echo json_encode('Failed');
        }
    }
    public function deleteItem(){

       if($this->model('Transaction_model')->postDeleteRowByDeleteItem($_POST['transaction_detail_id'])){
    
         $check = $this->model('Transaction_model')->getDetailRowByTransactionId($_POST['transaction_id']);
         if(empty($check)){
            if($this->model('Transaction_model')->postDeleteRowById($_POST['transaction_id'])){
                echo json_encode('empty');
            }
           
         }else{
            echo json_encode('available');
         }
         
       }else{
           echo json_encode('Failed');
       }
       
       
    }

    public function detaildata(){
        $user =  [
            'user_id' => $_SESSION['user_account']['id'],
            'transaction_status' => 'Keranjang'
             
       ];
       if(empty($user['user_id'])){
          
        header('Location: ' . BASEURL);
    }
     $status = $this->model('Transaction_model')->getSingleRowByStatus($user);      
        $data = [
            'rowDetail' => $this->model('Transaction_model')->getRowById($status['transaction_id']),
            'row' => $status,
            'display'=> 'display:block;',
            'display_delete'=> 'display:block;',
            'readonly' => ''
            

         ];

         $this->view('transaction/detail', $data);
         
    }

    public function boxed(){
        // echo json_encode($_POST['transaction_id']);
             $x = $this->model('Transaction_model')->getLastRow();
           
            if(empty($x['code'])){
                $order = 1;
                // var_dump($order);
               
            }else{
                $number = substr($x['code'],strpos($x['code'],'INV'));
                $order = substr($number, 5,7);
                $order++; 
            }
            $code = 'CAFE17PWT/'.date('Ymd').'/INV';
            $new_inv = $code.sprintf("%03s", $order);

            $user = $this->model('Account_model')->getRowById($_SESSION['user_account']['id']);

            $data = [
                'transaction_id' => $_POST['transaction_id'],
                'transaction_invoice_code' => $new_inv,
                'transaction_status' => 'Menunggu Konfirmasi',
                'transaction_customer_name' => $user['user_name'],
                'transaction_customer_phone_number' => $user['user_phone_number'], 
                'transaction_customer_address' => $user['user_address']
                
                
            ];

            echo json_encode($this->model('Transaction_model')->postUpdateRowByBoxed($data));
    }

    public function transaction_detail($transaction){
       
        $x = strpos($transaction,'-');
        $get_id = substr($transaction,0,$x);
        $get_status = substr($transaction,$x+1);
        $replace = str_replace('-', ' ', $get_status);
      
       

        $user =  [
            'user_id' => $_SESSION['user_account']['id'],
            'transaction_id'=> $get_id,
            'transaction_status'=> $replace,

             
       ];

      
       
       if(empty($user['user_id'])){
          
           header('Location: ' . BASEURL);
       }
       $status = $this->model('Transaction_model')->getSingleRowByStatus($user);    
        $data = [
            'page' => $user['transaction_status'],
            // 'row' => $this->model('Account_model')->getRowById($user['user_id']),
            'rowId' => $status
            
           
          
             ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('transaction/transaction_detail', $data);
        $this->view('template/footer', $data);

        echo "<script>$('#detail').load(baseurl + '/transaction/detaildata_transaction/".$transaction."');</script>";
    }

    public function detaildata_transaction($transaction_detail){
              

        $x = strpos($transaction_detail,'-');
        $get_id = substr($transaction_detail,0,$x);
        $get_status = substr($transaction_detail,$x+1);
        $replace = str_replace('-', ' ', $get_status);
      
     
        
        $user =  [
            'user_id' => $_SESSION['user_account']['id'],
            'transaction_id'=> $get_id,
            'transaction_status'=> $replace

             
       ];

       if(empty($user['user_id'])){
          
        header('Location: ' . BASEURL);
    }
    $status = $this->model('Transaction_model')->getSingleRowByTransactionId($user['transaction_id']);
    if($status['transaction_status'] == 'Menunggu Konfirmasi'){
        $data = [
            'rowDetail' => $this->model('Transaction_model')->getRowById($status['transaction_id']),
            'row' => $status,
            'display'=> 'display:none',
            'display_delete'=> 'display:block',
            'readonly' => ''

         ];
    } 
    else {
        $data = [
            'rowDetail' => $this->model('Transaction_model')->getRowById($status['transaction_id']),
            'row' => $status,
            'display'=> 'display:none;',
            'display_delete'=> 'display:none;',
            'readonly' => 'readonly style="border: 0px; background-color: transparent;"'

         ];
    } 
        

         $this->view('transaction/detail', $data);
         
    }
}