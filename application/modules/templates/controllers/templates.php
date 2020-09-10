<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class templates extends MX_Controller {

    public function index(){
           $this->load->view('admin'); 
    }
    function one_col(){
        $this ->load -> view('one_col');
    }
    function two_col(){
        $this ->load -> view('two_col');
    }
    function admin($data){
        $this -> load -> view('admin',$data);
    }
}