<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_beranda');
	}
	// public function getlogin()
	// {
	// 	$u = $this->input->post('username');
	// 	$p = $this->input->post('password');
	// 	$this->load->model('model_login');
 //    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
