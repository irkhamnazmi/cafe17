<?php

class Menu extends Controller
{
    public $page_name = 'Menu';

    public function index()
    {
        $data = [
            'page' => $this->page_name,
            'category'=> 'Semua Kategori',
            'row' => $this->model('Menu_model')->getAllRow()
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('menu/index', $data);
        $this->view('template/footer', $data);
    }
    public function filter($category)
    {
        $data = [
            'page' => $this->page_name,
            'category' => $category,
            'row' => $this->model('Menu_model')->getRowByCategory($category)
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('menu/index', $data);
        $this->view('template/footer', $data);
    }

    public function order($menu)
    {


        $x = strpos($menu,'-');
        $get_id = substr($menu,0,$x);
        $get_menu = substr($menu,$x+1);
        $replace = str_replace('-', ' ', $get_menu);
      
      
        $get_key = [

            'menu_id' => $get_id,
            'menu_name' => $replace 

        ];

        $key = $this->model('Menu_model')->getRowByKeyword($get_key);
            
        if(!empty($key)){
            $data = [
                'page' => $this->page_name,
                'rowId' => $key,
                'menu' => $this->model('Menu_model')->getAllRow()
            ];
           
            $this->view('template/header', $data);
            $this->view('template/navbar', $data);
            $this->view('menu/order', $data);
            $this->view('template/footer', $data);
        }
        else{
            echo "Halaman Tidak Ditemukan";
        }

       
    }

    public function cart(){
        $user =  [
            'user_id' => $_SESSION['user_account']['id'],
            'transaction_status' => 'Keranjang'
             
       ];
      $transaction = $this->model('Transaction_model')->getSingleRowByStatus($user);
       
        if(empty($transaction)){
            // $x = $this->model('Transaction_model')->getLastRow();
           
            // if(empty($x['code'])){
            //     $order = 1;
            //     // var_dump($order);
               
            // }else{
            //     $number = substr($x['code'],strpos($x['code'],'INV'));
            //     $order = substr($number, 5,7);
            //     $order++; 
            // }
            // $code = 'CAFE17PWT/'.date('Ymd').'/INV';
            // $new_inv = $code.sprintf("%03s", $order);

            $data =[
                'transaction_status' => 'Keranjang',
                'user_id' => $_SESSION['user_account']['id'],
                'transaction_category' => 'Online'
               
                
            ];
         
            if($this->model('Transaction_model')->postInsertRow($data)){
                $result = $this->model('Transaction_model')->getSingleRowByStatus($data); 
                              
                $data_detail = [

                    'transaction_id' => $result['transaction_id'],
                    'transaction_detail_price_total' => $_POST['transaction_detail_price_total'],
                    'transaction_detail_qty' => $_POST['transaction_detail_qty'],
                    'transaction_detail_note' => $_POST['transaction_detail_note'],
                    'menu_id' => $_POST['menu_id']

                ];
               $this->model('Transaction_model')->postInsertDetailRow($data_detail);
               echo "<script> toastr.success('Pesanan masuk Keranjang'); </script>";
               header('Location: ' . BASEURL . '/transaction');

               
            }
            

        }
        else {
            
            $menu = $_POST['menu_id'];
            $data_check = [
                'transaction_id' => $transaction['transaction_id'],
                'menu_id' => $menu
            ];
          
            $x = $this->model('Transaction_model')->getRowByMenu($data_check); 
           
            if(empty($x)){
                $data =[
                    'transaction_id' => $transaction['transaction_id'],
                    'transaction_detail_price_total' => $_POST['transaction_detail_price_total'],
                    'transaction_detail_qty' => $_POST['transaction_detail_qty'],
                    'transaction_detail_note' => $_POST['transaction_detail_note'],
                    'menu_id' => $_POST['menu_id']

                ];
                $this->model('Transaction_model')->postInsertDetailRow($data);
                header('Location: ' . BASEURL . '/transaction');
               
            }else{

                $data =[
                    'transaction_detail_id' => $x['transaction_detail_id'],
                    'transaction_detail_price_total' => $_POST['transaction_detail_price_total']+$x['transaction_detail_price_total'],
                    'transaction_detail_qty' => $_POST['transaction_detail_qty']+$x['transaction_detail_qty'],
                    'transaction_detail_note' => $_POST['transaction_detail_note'],
                    'menu_id' => $_POST['menu_id']

                ];

            
                $this->model('Transaction_model')->postUpdateDetailRow($data);
                header('Location: ' . BASEURL . '/transaction');
             
            }

           
        }
       
    }

    public function search(){
        $menu = $_POST['menu_name'];
        if(empty($menu)){
            echo json_encode('empty');
        }else{
            if($x = $this->model('Menu_model')->getRowBySearch($menu)){
                echo json_encode($x);
            }
        }

      
        
    }

    

}