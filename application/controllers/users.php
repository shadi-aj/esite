<?php
/*	This Controller is used for :
	2) logging in
	3) logging out
	4) creating users*/
class users extends CI_Controller{
// login functionality
	public function handle_login(){
		$form = $this->input->post(NULL,TRUE);
		$this->load->model('User');
		$this->User->user_check($form);
	}
	public function login_error(){
		
		$this->load->view('/userViews/error');
	}
// loggout
	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->set_userdata('logged_in' , FALSE );
		redirect('/home');
	}
// creating users
	public function register(){
		$this->load->view('/register');
	}
	public function store(){
		$form = $this->input->post(NULL,TRUE);
		$this->load->model('User');
		$this->User->create_user($form);
	}
}?>

<!-- Back-End is Developed by :
	 Shadi Ajlyakin => shadi_ajl@hotmail.com 
	-->