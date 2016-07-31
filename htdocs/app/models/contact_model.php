<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Contact_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('email'));
    }

    public function send($fromEmail, $enquiry, $fromName, $fromTel, $toEmail = false, $subject = false)
    {
        $to = $toEmail !== false ? $toEmail : 'info@rsfbathrooms.co.uk';
    	$subject = $subject !== false ? $subject : 'Website enquiry';

        $emailData = [
            'email' => $fromEmail,
            'name' => $fromName,
            'tel' => $fromTel,
            'enquiry' => $enquiry
        ];

        $message = $this->load->view('email/contact-form', $emailData, true);

        $this->email->from($fromEmail, $fromName);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if (!$this->email->send())
        {
            // echo '<pre>', print_r($this->email->print_debugger()), '</pre>';
        	return false;
        }

        return TRUE;
    }

}
