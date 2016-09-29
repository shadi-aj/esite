<?php

class Content extends CI_Controller{ 

	public function index(){
		$this->load->view('/contentViews/index');
	}

// Math Section
	public function math($less_id){
		$this->load->library('session');
		$id = $this->uri->segment(3);
		$this->load->model('process');
		$data['less']= $this->process->fetch_math_less();
		$data['comments']= $this->process->fetch_comments_math($id);
		$data['less_url']= $this->process->get_math_less_url($id);
		$this->load->view('/contentViews/math',$data);
	}
	public function save_math_ach(){
		$less_data = $this->input->post(NULL,TRUE);
		$this->load->model('process');
		$next['id'] = $this->process->math_less_learned($less_data);
		redirect('/content/math/'.$next['id']['id']);
	}
	public function comment_math(){
		$data = $this->input->post(NULL,TRUE);
		$this->load->model('process');
		$this->process->post_comment_math($data);
		redirect('/content/math/'.$data['less_id']);
	}

// Language Section
	public function lang($less_id){
		$this->load->library('session');
		$id = $this->uri->segment(3);
		$this->load->model('process');
		$data['less']= $this->process->fetch_lang_less();
		$data['comments']= $this->process->fetch_comments_lang($id);
		$data['less_url']= $this->process->get_lang_less_url($id);
		$this->load->view('/contentViews/lang',$data);
	}
	public function save_lang_ach(){
		$less_data = $this->input->post(NULL,TRUE);
		$this->load->model('process');
		$next['id'] = $this->process->lang_less_learned($less_data);
		redirect('/content/lang/'.$next['id']['id']);
	}
	public function comment_lang(){
		$data = $this->input->post(NULL,TRUE);
		$this->load->model('process');
		$this->process->post_comment_lang($data);
		redirect('/content/lang/'.$data['less_id']);
	}
	public function color(){
		$this->load->view('/contentViews/color');
	}
	public function print($id){
		$this->load->view('/contentViews/coloring/p'. $id);
	}
	public function story(){
		$this->load->view('/contentViews/story');
	}
}
?>
<!-- Back-End is Developed by :
	 Shadi Ajlyakin => shadi_ajl@hotmail.com 
	-->