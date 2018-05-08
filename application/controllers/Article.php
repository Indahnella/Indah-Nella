<?php
class Article extends CI_Controller {
	public function index(){
		$data['data'] = array(
		'artikel' => $this->db->get('artikel')
	);
		$data['content']='page/artikel';
		$this->load->view('page/dashboard',$data);
	}
	function view(){
		$data['data'] = array(
		'artikel' => $this->db->get('artikel')
	);
		$data['content']='page/view_artikel';
		$this->load->view('page/dashboard',$data);
	}
}
