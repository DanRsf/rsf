<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Contact_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('email'));
    }

    public function send($fromEmail, $message, $toEmail = false, $subject = false)
    {
    	$from = $toEmail !== false ? $toEmail : 'info@rsfbathrooms.co.uk';
    	$from = $subject ? $subject : 'Website enquiry';

        $this->email->from($fromEmail);
        $this->email->to($toEmail);
        $this->email->subject($subject);
        $this->email->message($message);

        if (!$this->email->send())
        {
        	return false;
        }

        return TRUE;
    }

}
