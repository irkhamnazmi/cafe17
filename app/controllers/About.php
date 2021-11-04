<?php

class About extends Controller
{

    public $page_name = 'About';

    public function index()
    {
        $data = [
            'page' => $this->page_name
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('about/index', $data);
        $this->view('template/footer', $data);
    }    

}