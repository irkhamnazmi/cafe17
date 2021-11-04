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

    

}