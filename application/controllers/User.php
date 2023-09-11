<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function personal_area(){
        $id_user = $this->session->userdata('id_user');
		$this->load->view('temp/header');
		if ($this->session->userdata('role') == 1){
            $this->load->view('temp/navbar_user');
        }
        else if ($this->session->userdata('role') == 2){
            $this->load->view('temp/navbar_admin');
        } else {
		    $this->load->view('temp/navbar');
        }
        $this->load->model('user_model');
        $data['app'] = $this->user_model->select_application($id_user);
        $this->load->view('personal_area',$data);
        $this->load->view('temp/footer');
    }
}
