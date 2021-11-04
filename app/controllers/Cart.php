<?php

class Cart extends Controller
{
    public $page_name = 'Keranjang';

    public function index()
    {
        $data = [
            'page' => $this->page_name
        
        ];

        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('cart/index', $data);
        $this->view('template/footer', $data);
    }
}