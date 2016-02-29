<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        define('RESOURCES', '/resources/');
        define('IMG', RESOURCES.'img');
        define('JS', RESOURCES.'js');
        define('CSS', RESOURCES.'css');
        
        $this->data = [];
    }

}
