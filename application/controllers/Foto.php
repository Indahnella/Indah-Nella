<?php 
	class Foto extends CI_Controller{
		public function index(){
			$data['data'] = array(
		'galeri' => $this->db->get('galery')
	);
			$data['content']='page/galeri';
			$this->load->view('page/dashboard',$data);
		}
	}
 ?>