<?php 
	class Puisi extends CI_Controller{

		function _construct(){
		parent::_construct();
		
		}

		public function index(){
			$data['data'] = array(
				'puisi' => $this->db->get('puisi')
			);

			$this->load->model('Puisi_model');
			$data['puisi']=$this->Puisi_model->datapuisi();
			$data['content']='page/puisi_view';
			$this->load->view('page/dashboard',$data);
		}
		function view(){
			$data['data'] = array(
				'puisi' => $this->db->get('puisi')
			);
			$data['content']='page/isi_puisi';
			$this->load->view('page/dashboard',$data);
		}
	}
 ?>