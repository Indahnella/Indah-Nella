<?php 
	class Administrator extends CI_controller{
		public function index(){
			$data['query']=array();
			$data['content']='Admin/dashboard/dashboard';
			$this->load->view("Admin/admin",$data);
		}
	}
 ?>