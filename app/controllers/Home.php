<?php

class Home extends Controller
{
    public $page_name = 'Home';

    public function index()
    {
        $data = [
            'page' => $this->page_name,
            'billboard' => $this->model('Menu_model')->getTop3Row(),
            'blog' => $this->model('Blog_model')->getAllRow(),
            'menu' => $this->model('Menu_model')->getAllTopRow()
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }
}   
