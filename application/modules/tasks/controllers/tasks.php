<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tasks extends MX_Controller {
	public function index()
	{
       
       
        $this ->load ->model('mdl_tasks');
        $data['query']=$this->mdl_tasks->get('priority');
        $data['module']='tasks'; //module in which the view is available
        $data['view_file']='tasks_view';//view in the module

        echo Modules::run('templates/admin',$data);
       // $this->load->view('tasks_view',$data);
        
        

    }
    
    public function create(){
        $data=$this->get_data_from_post();
        $data['module']='tasks';
        $data['view_file']='form';
        echo Modules::run('templates/admin',$data);
    }

    public function submit(){
        $this ->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
        $this->form_validation->set_rules('priority', 'Priority', 'required|numeric|max_length[2]');

        if ($this->form_validation->run() === FALSE)
        { 
            $this->create();
        }
        else
        {
            $data=$this->get_data_from_post();
            $this->mdl_tasks->insertData($data);
        }

    }

    public function get_data_from_post(){
        $data['name']=$this->input->post('title',TRUE);
        $data['priority']=$this->input->post('priority',TRUE);
        return $data;

    }
}