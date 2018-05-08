<?php 
	class Cerpen extends CI_Controller{
		public function index(){
			$data['data'] = array(
				'cerpen' => $this->db->get('cerpen')
			);

			$data['content']="page/cerpen";
			$this->load->view("page/dashboard",$data);
		}
		function view(){
			$data['data'] = array(
				'cerpen' => $this->db->get('cerpen')
			);

			$data['content']="page/view_cerpen";
			$this->load->view("page/dashboard",$data);
		}
	}
 ?>