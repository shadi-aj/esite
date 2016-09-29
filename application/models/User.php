<?php
// this model handels users operations ( loggin/Registeration validation )

class User extends CI_Model {
// login
	function user_check($form){
		$query = "SELECT * FROM users WHERE username = ? AND password = ?";
		$value = [$form['username'],$form['password']];
		$info = $this->db->query($query,$value)->row_array();
		
		if ($info === NULL) {
		redirect('/home');
		}else{
		$this->load->library('session');
		$this->session->set_userdata(['username' => $info['username'], 'user_id' => $info['id'],'logged_in' => TRUE]);
		redirect('/content');
		}
	}
// Register
	function create_user($form){
		// validation
		$this->load->library('session');
		$errorArray =[];
		if (!filter_var($form['email'],FILTER_VALIDATE_EMAIL)) {
			// have to validate the duplicate email
			array_push($errorArray, "Your e-mail does not have a valid format.");
		}
		if (strlen($form['username']) < 6 ) {
			array_push($errorArray, "Username must be 6 characters atleast.");
		}
		if (strlen($form['password']) < 6 ) {
			array_push($errorArray, "Password must be 6 characters atleast.");
		}
		if(strlen($form['password']) >= 12 ) {
			array_push($errorArray, "Password must be less than 12 characters.");
		}
		if ($form['password'] != $form['conf_pass']) {
			array_push($errorArray, "Password does not match the confermation.");
		}
		// validation ends
		if (count($errorArray) === 0) {
			$query = "INSERT INTO users (username,email,password,created_at)
						VALUES(?,?,?,NOW())";
			$values = [$form['username'],$form['email'],$form['password']];
			$this->db->query($query,$values);
			$queryId = "SELECT id FROM users WHERE email = ? AND password = ?";
			$valuesId = [$form['email'],$form['password']];
			$id = $this->db->query($queryId,$valuesId)->row_array();
			$this->session->set_userdata(['username'=> $form['username'],'user_id'=> $id['id'],'logged_in' => TRUE]);
			$this->session->unset_userdata('Errors');
			redirect('/content');
		}else{
			$this->session->set_userdata('Errors' , $errorArray);
			redirect('/users/register');
		}
	}	
}
?>
<!-- Back-End is Developed by :
	 Shadi Ajlyakin => shadi_ajl@hotmail.com 
	-->