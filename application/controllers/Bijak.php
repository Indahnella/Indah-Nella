<?php 
	class Bijak extends CI_Controller{
		public function index(){
			$data['data'] = array(
		'motivasi' => $this->db->get('motivasi')
	);
			$data['content']="page/kata_bijak";
			$this->load->view("page/dashboard",$data);
		}
	}
 ?>