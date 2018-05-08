<?php
class Wellcome extends CI_Controller {
	public function index(){
		$data['content']='page/home_view';
		$this->load->view("page/dashboard",$data);
	}
}
 ?>