<?php
class About extends CI_Controller {
	public function index(){
		$data['content']='page/tentang';
		$this->load->view('page/dashboard',$data);
	}
	function sekolah(){
		$data['content']='page/view_sekolah';
		$this->load->view('page/dashboard',$data);
	}
	function jurnalis(){
		$data['content']='page/view_jurnalis';
		$this->load->view('page/dashboard',$data);
	}
}
?>