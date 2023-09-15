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
        $data['appl'] = $this->user_model->select_application($id_user);
        $this->load->view('personal_area',$data);
        $this->load->view('modal.php');
        $this->load->view('temp/footer');
    }
    public function new_application(){
		$this->load->view('temp/header');
		if ($this->session->userdata('role') == 1){
            $this->load->view('temp/navbar_user');
        }
        else if ($this->session->userdata('role') == 2){
            $this->load->view('temp/navbar_admin');
        } else {
		    $this->load->view('temp/navbar');
        }
        
        $this->load->model('category_model');
        $datac['categories'] = $this->category_model->select_category();
        $this->load->view('new_application', $datac);
        $this->load->view('temp/footer');
    }

    public function new_app(){
        if (!empty($_POST)){
            if (isset($_FILES['before_photo']) && $_FILES['before_photo']['error'] === UPLOAD_ERR_OK) {
            $id_user = $this->session->userdata('id_user');
            $app_name = $_POST['app_name'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            
            $before_photo = $_FILES['before_photo']['name'];
    
            $this->load->model('application_model');
            $user = $this->application_model->ins_application($id_user, $app_name, $description, $before_photo, $category);
            $photoPath = 'img/' . $before_photo;
            move_uploaded_file($_FILES['before_photo']['tmp_name'], $photoPath);
            redirect('user/personal_area');

            }
        }
    }
    //Удалить заявку 
public function del() {
    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        $this->load->model('application_model');
        $this->application_model->del($id);
        
        redirect('user/personal_area');
    }
}
}