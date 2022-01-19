<?php

class Account extends Controller
{
    public $page_name = 'Akun';

    public function index()
    {
        $user = $_SESSION['user_account']['id'];
        $data = [
            'page' => $this->page_name,
            'row' => $this->model('Account_model')->getRowById($user)
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('account/index', $data);
        $this->view('template/modal',$data);
        $this->view('template/footer', $data);
    }


    public function checking()
    {
      
        echo json_encode($this->model('Account_model')->getRowByEmail($_POST['user_email']));
    }
    public function login()
    {
        
        $data =[
            'user_id' => $_POST['user_id'],
            'user_name' => $_POST['user_name']
        ];

        $this->user_account($data);
       
    }
    public function logout()
    {
        unset($_SESSION['user_account']);
        echo '<script type="text/javascript"> location.replace("'. BASEURL .'")</script>';
        exit;
      
    }
    
    public function validation()
    {
        $data =[
            'user_email' => $_POST['user_email'],
            'user_password' => $_POST['user_password']
        ];
   
        echo json_encode($this->model('Account_model')->getRowByLogin($data));
    }


    public function reset()
    {   
        $random_pass = $this->getPassword(10);
        $data =[
            'user_id' => $_POST['user_id'],
            'user_email' => $_POST['user_email'],
            'user_password' =>  $random_pass,
            'subject'=> 'Reset Sandi Akun',
            'ilustration'=> 'https://irkhamnazmi.github.io/cafe17/images/lock.png',
            'message'=> '<h1><b>Ganti Sandi Baru</b></h1> 
                        <h4>Di bawah ini adalah sandi Anda yang telah diganti secara bawaan dari sistem kami. Anda bisa masuk ke aplikasi Cafe17 Purwokerto menggunakan Sandi ini</h4>
                        <br>
                        <h1>'.$random_pass.'</h1>  
                        <br>
                        <h4>Segera ubah sandi yang mudah diingat di pengaturan Akun aplikasi cafe17 Purwokerto.</h4>'
            
        ];
        
        if($this->model('Account_model')->postUpdateRowById($data)){
            echo json_encode('Berhasil');
            $this->email_account($data);
          
        }
        
        // exit;   
        
    }

  
    public function getPassword($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
      
        return $randomString;
    }

    public function register(){
        $data =[
         
            'user_name' => $_POST['user_name'],
            'user_email' => $_POST['user_email'],
            'user_phone_number' => $_POST['user_phone_number'],
            'user_address' => $_POST['user_address'],
            'user_password' => $_POST['user_password'],
            'subject'=> 'Member baru Cafe17 Purwokerto',
            'ilustration'=> 'https://irkhamnazmi.github.io/cafe17/images/notif.png',
            'message'=> '<h1><b>Selamat datang pelanggan Cafe17 Purwokerto</b></h1> 
                        <h4>Terimakasih telah bersedia untuk menjadi pelanggan kami. Pelayanan kami dibuka pukul 08.00 hingga 20.00 WIB dan hari Minggu tutup</h4>
                        <br>
                        <button class="btn-primary">Pesan Sekarang</button>
                        <br>
                        <br>
                        <h4>Sekarang saatnya memilih menu yang Anda suka.</h4>'
        ];

        if($this->model('Account_model')->postInsertRow($data)){
            echo json_encode('Success');
            $user =  $this->model('Account_model')->getRowByEmail($data['user_email']);
            $this->user_account($user);
            $this->email_account($data);
        } 

        

    }


    public function user_account($data){
        $_SESSION['user_account'] = [
            'id' => $data['user_id'],
            'username' => $data['user_name']
        ];
    }
  
    public function email_account($data){
        $_SESSION['email'] = [
            'email' => $data['user_email'],
            'subject' => $data['subject'],
            'ilustration' => $data['ilustration'],
            'message' => $data['message']
        ];
    }


   public function delete_account(){
        if($this->model('Account_model')->postDeleteRowById($_POST['user_id'])){
           
            echo json_encode('success');
            
        } else{
            echo json_encode('failed');
        }
       
    }
    
    public function update_account(){
        $data =[
            'user_id' => $_SESSION['user_account']['id'],
            'user_name' => $_POST['user_name'],
            'user_email' => $_POST['user_email'],
            'user_phone_number' => $_POST['user_phone_number'],
            'user_address' => $_POST['user_address'],
            'user_password' => $_POST['user_password']
          
        ];
        // echo json_encode($data);

        if($this->model('Account_model')->postUpdateRow($data)){
            echo json_encode('Success');
          
        } else{
            echo json_encode('Failed');
        }
    }



  
      
    


}