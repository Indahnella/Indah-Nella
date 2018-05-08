<?php 
	class Chat extends CI_Controller{
		public function index(){
			$data['data'] = array(
				'pesan' => $this->db->get('pesan')
			);
			$data['content']='Admin/chat/pesan';
			$this->load->view("Admin/admin",$data);
		}
	}
 ?>