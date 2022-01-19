<?php

class Blog extends Controller
{

    public $page_name = 'Blog';

    public function index()
    {
        $data = [
            'page' => $this->page_name,
            'blog' => $this->model('Blog_model')->getAllRow()
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('blog/index', $data);
        $this->view('template/modal',$data);
        $this->view('template/footer', $data);
    }

    public function view_blog($title)
    {

        $x = strpos($title,'-');
        $get_id = substr($title,0,$x);
        $get_title = substr($title,$x+1);
        $replace = str_replace('-', ' ', $get_title);
      
      
        $get_key = [

            'blog_id' => $get_id,
            'blog_title' => $replace 

        ];

      
        
        $key = $this->model('Blog_model')->getRowByKeyword($get_key);
            
        if(!empty($key)){
            $data = [
                'page' => $this->page_name,
                'rowId' => $key,
                'blog' => $this->model('Blog_model')->getAllRow()
            ];
           
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('blog/view_blog', $data);
        $this->view('template/modal',$data);
        $this->view('template/footer', $data);
        }
        else{
            echo "Halaman Tidak Ditemukan";
        }

           
    }

}