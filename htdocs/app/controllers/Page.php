<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function products()
    {
        $this->load->view('products');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function installation()
    {
        $this->load->view('installation');
    }
}
