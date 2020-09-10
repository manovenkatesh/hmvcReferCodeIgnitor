<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdl_tasks extends CI_Model{

    function get($order_by){
        $this->db->order_by($order_by);
        $query=$this->db->get('tasks');
        return $query;
    }

    function insertData($data){
        return $this->db->insert('tasks',$data);
    }

}