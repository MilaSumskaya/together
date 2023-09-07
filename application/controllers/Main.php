<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('temp/header');
		if ($this->session->userdata('role') === '1'){
            $this->load->view('temp/navbar_user');
        }
        else if ($this->session->userdata('role') === '2'){
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
}
