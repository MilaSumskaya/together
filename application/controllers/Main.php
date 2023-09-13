<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('temp/header');
		if ($this->session->userdata('role') == 1){
            $this->load->view('temp/navbar_user');
        }
        else if ($this->session->userdata('role') == 2){
            $this->load->view('temp/navbar_admin');
        } else {
		    $this->load->view('temp/navbar');
        }
		$this->load->view('index');
        $this->load->model('application_model');
        $data['app'] = $this->application_model->select_application();
        $this->load->view('application',$data);
        $this->load->view('temp/footer');
	}
	public function log() {
        if (!empty($_POST)){
		$plogin = $_POST['login'];
		$ppassword = $_POST['password'];

		$this->load->model('user_model');
		$user = $this->user_model->select_login($plogin, $ppassword);

		if (!empty($user)) {
			$id_user = $user['id_user'];
			$role = $user['role'];
			$fio = $user['full_name'];
	
				$newdata = array(
					'id_user' => $id_user,
					'role' => $role,
					'fio' => $fio
					);
	
				$this->session->set_userdata($newdata);
	
				
			if ($this->session->userdata('role') == 1){
			    redirect('user/personal_area');
			}
			else if ($this->session->userdata('role') == 2){
				redirect('admin/admin_area');
		}
	}
		}
		$this->load->view('temp/header');
		$this->load->view('log');
	}
	public function regist(){
        if (!empty($_POST)) {
			if (!empty($_POST['fio']) and !empty($_POST['login']) and !empty($_POST['email']) and !empty($_POST['password'])){
            $pfio = $_POST['fio'];
            $plogin = $_POST['login'];
            $pemail = $_POST['email'];
            $ppassword = $_POST['password'];

            $this->load->model('user_model');
            $this->user_model->insert_user($pfio, $plogin, $pemail, $ppassword);

            redirect('main/log');
		}
        }
		$this->load->view('temp/header');
        $this->load->view('reg');
	}
    public function logout() {
        $this->session->sess_destroy();
        redirect('main/');
    }
}
