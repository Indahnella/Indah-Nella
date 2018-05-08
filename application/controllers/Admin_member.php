<?php 
	class Admin_member extends CI_Controller{
		public function index(){
			$data['query']=array();
			$data['user']=$this->session->userdata('user_username');
			$data['content']="Admin/propil/member";
			$this->load->view("Admin/admin",$data);
		}
		function tambah(){
			$data['query']=array();
			$data['user']=$this->session->userdata('user_username');
			$data['content']="Admin/propil/add_member";
			$this->load->view("Admin/admin",$data);
		}
		function edit(){
			$data['query']=array();
			$data['user']=$this->session->userdata('user_username');
			$data['content']="Admin/propil/edit_propil";
			$this->load->view("Admin/admin",$data);
		}
	}
 ?>