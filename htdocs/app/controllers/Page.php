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
        $this->load->view('home', $this->data);
    }

    public function products()
    {
        $this->load->view('products', $this->data);
    }

    public function about()
    {
        $this->load->view('about-us', $this->data);
    }

    public function areas_covered()
    {
        $this->load->view('areas-covered', $this->data);
    }

    public function contact()
    {
        $this->data['success'] = false;

        if($this->input->post())
        {
            if($this->form_validation->run('contact'))
            {
                $this->load->model('contact_model');
                foreach(['name','email','enquiry','phone'] as $field) {
                    $post[$field] = $this->input->post($field);
                }

                if($response = $this->contact_model->send($post['email'], $post['enquiry'], $post['name'], $post['phone']))
                {
                    $this->data['success'] = true;
                }
            }
        }
        $this->load->view('contact', $this->data);
    }

    public function design()
    {
        $this->load->view('design', $this->data);
    }

    public function installation()
    {
        $this->load->view('installation', $this->data);
    }
}
