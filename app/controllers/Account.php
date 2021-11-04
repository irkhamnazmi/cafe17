<?php

class Account extends Controller
{
    public $page_name = 'Akun';

    public function index()
    {
        $data = [
            'page' => $this->page_name
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('account/index', $data);
        $this->view('template/footer', $data);
    }
}