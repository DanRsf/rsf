<?php

$config = array(
	'contact' => array(
		array('field' => 'name', 'label' => 'name', 'rules' => 'required'),
		array('field' => 'email', 'label' => 'email', 'rules' => 'required|valid_email'),
		array('field' => 'phone', 'label' => 'telephone', 'rules' => ''),
		array('field' => 'enquiry', 'label' => 'enquiry', 'rules' => 'required')
		)
	);
