<?php

class Process extends CI_Model{


// Math Section

	public function fetch_math_less(){
		$result = $this->db->query("SELECT id,less_title FROM math_cur")->result_array();
		return $result;
	}
	public function get_math_less_url($id){
		$query = "SELECT less_title,less_url,less_id FROM math_cur WHERE id = ?" ;
		$value = [$id];
		$result = $this->db->query($query,$value)->row_array();
		return $result;
	}
	public function math_less_learned($data){
		$learned = $this->db->query("SELECT id FROM achiev_math WHERE users_id = ? AND math_cur_id = ?",[$data['user_id'],$data['less_id']])->row_array();
		if ($learned === NULL) {
		$query = "INSERT INTO achiev_math (users_id, math_cur_id) VALUES (?, ?)";
		$values = [$data['user_id'],$data['less_id']];
		$this->db->query($query,$values);
		}
		$next_exist = $this->db->query("SELECT id,less_id FROM math_cur WHERE less_id = ?",[$data['less_seq']+1])->row_array();
		if ($next_exist != NULL) {
			return $next_exist;
		}else{
			redirect('content');
		}
	}
	public function post_comment_math($comment){
		$query = "INSERT INTO math_comments (users_id, math_cur_id, comment,created_at) VALUES (?,?,?,NOW())";
		$values = [$comment['user_id'],$comment['less_id'],$comment['comment']];
		$this->db->query($query,$values);
	}
	public function fetch_comments_math($less_id){
		$query = "SELECT users.username, math_comments.comment, math_comments.math_cur_id 
				  from math_comments LEFT JOIN users ON users.id = math_comments.users_id 
				  WHERE math_cur_id	= ?
				  ORDER BY math_comments.created_at DESC";
		$result = $this->db->query($query,[$less_id])->result_array();
		return $result;
	}

// Language Section
	public function fetch_lang_less(){
		$result = $this->db->query("SELECT id,less_title FROM lang_cur")->result_array();
		return $result;
	}
	public function get_lang_less_url($id){
		$query = "SELECT less_title,less_url,less_id FROM lang_cur WHERE id = ?" ;
		$value = [$id];
		$result = $this->db->query($query,$value)->row_array();
		return $result;
	}
	public function lang_less_learned($data){
		$learned = $this->db->query("SELECT id FROM achiev_lang WHERE users_id = ? AND lang_cur_id = ?",[$data['user_id'],$data['less_id']])->row_array();
		if ($learned === NULL) {
		$query = "INSERT INTO achiev_lang (users_id, lang_cur_id) VALUES (?, ?)";
		$values = [$data['user_id'],$data['less_id']];
		$this->db->query($query,$values);
		}
		$next_exist = $this->db->query("SELECT id,less_id FROM lang_cur WHERE less_id = ?",[$data['less_seq']+1])->row_array();
		if ($next_exist != NULL) {
			return $next_exist;
		}else{
			redirect('content');
		}
	}
	public function post_comment_lang($comment){
		$query = "INSERT INTO lang_comments (users_id, lang_cur_id, comment,created_at) VALUES (?,?,?,NOW())";
		$values = [$comment['user_id'],$comment['less_id'],$comment['comment']];
		$this->db->query($query,$values);
	}
	public function fetch_comments_lang($less_id){
		$query = "SELECT users.username, lang_comments.comment, lang_comments.lang_cur_id 
				  from lang_comments LEFT JOIN users ON users.id = lang_comments.users_id 
				  WHERE lang_cur_id	= ?
				  ORDER BY lang_comments.created_at DESC";
		$result = $this->db->query($query,[$less_id])->result_array();
		return $result;
	}



}?>
<!-- Back-End is Developed by :
	 Shadi Ajlyakin => shadi_ajl@hotmail.com 
	-->