<?php

class Home extends CI_Controller{

	public function index(){
	$this->load->library('session')	;
	if (!array_key_exists('logged_in',$_SESSION)) {
	$this->session->set_userdata('logged_in' , FALSE);
			}	
		$this->load->view('home.php');
	}
	public function aboutus(){
		$this->load->view('Aboutus.php');
	}

}?>

<!-- Back-End is Developed by :
	 Shadi Ajlyakin => shadi_ajl@hotmail.com 
	-->
