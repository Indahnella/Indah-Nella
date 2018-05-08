<?php 
	class Contact extends CI_Controller{
		public function index(){
		$data['query']=$this->db->get('pesan');
		$data['content']='page/kontak';
		$this->load->view('page/dashboard',$data);
	}
		public function create(){
		    $pengirim  = $this->input->post('nama_pengirim');
		    $email      = $this->input->post('email');
		    $no_hp      = $this->input->post('no_hp');
		    $pesan      = $this->input->post('isi_pesan');

		    $data = array(
		      'nama_pengirim' => $pengirim,
		      'email' => $email,
		      'no_hp' => $no_hp,
		      'isi_pesan' => $pesan,
		      'siswa_jk' => $jk,
		      'siswa_entri' => date('Y-m-d H:i:s')
		    );
		}
	
}
 ?>