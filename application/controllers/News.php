<?php
class News extends CI_Controller {
	public function index(){
		$data['data']= array(
			'new' => $this->db->get('berita')
		);

		$data['content']='page/berita';
		$this->load->view('page/dashboard',$data);
	}
}
?>
