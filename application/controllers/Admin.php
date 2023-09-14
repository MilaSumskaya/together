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
        $this->load->view('modal_success.php');
        $this->load->view('modal_reason.php');
        $this->load->view('temp/footer');
    }

    public function upd_app_two(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $this->load->model('application_model');
            $this->application_model->upd_status_two($id);

            redirect('admin/admin_area');
        }
    }

    public function upd_app_three(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $this->load->model('application_model');
            $this->application_model->upd_status_three($id);

            redirect('admin/admin_area');
        }
    }
    

    public function success(){
        if (!empty($_POST)){
            if (isset($_FILES['after_photo']) && $_FILES['after_photo']['error'] === UPLOAD_ERR_OK) {
            $id = $_POST['id'];
            $completion_date = $_POST['completion_date'];
            
            $after_photo = $_FILES['after_photo']['name'];
    
            $this->load->model('application_model');
            $user = $this->application_model->update_app($id, $completion_date, $after_photo);
            $photoPath = 'img/' . $after_photo;
            move_uploaded_file($_FILES['after_photo']['tmp_name'], $photoPath);
            redirect('admin/admin_area');

            }
        }
    }
    

    public function reason(){
        if (!empty($_POST)){
            $id = $_POST['id'];
            $rejection_reason = $_POST['rejection_reason'];
    
            $this->load->model('application_model');
            var_dump($id);
            $user = $this->application_model->update_reason($id, $rejection_reason);
            redirect('admin/admin_area');
        }
    }
}