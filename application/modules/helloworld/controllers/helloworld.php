<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class helloworld extends MX_Controller {
	public function index()
	{
		$this->load->view('helloworld');
    }

    public function sayHello($name){
        echo "Hey Hello ...How are you $name ?";
    }

}