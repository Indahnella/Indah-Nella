<?php 
	class Informasi extends CI_Controller{
		public function index(){
			$data['data'] = array(
				'info' => $this->db->get('info_sekolah')
			);
			
			$data['content']='page/info_sekolah';
			$this->load->view('page/dashboard',$data);
		}
	}
 ?>