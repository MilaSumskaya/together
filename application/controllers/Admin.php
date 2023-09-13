<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function admin_area(){
		$this->load->view('temp/header');
		if ($this->session->userdata('role') == 1){
            $this->load->view('temp/navbar_user');
        }
        else if ($this->session->userdata('role') == 2){
            $this->load->view('temp/navbar_admin');
        } else {
		    $this->load->view('temp/navbar');
        }
        
        $this->load->model('application_model');
        $data['app'] = $this->application_model->select_all_application();
        $this->load->view('user_application',$data);
        $this->load->view('temp/footer');
    }
}