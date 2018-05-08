<?php 
	class Login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('Login_model');
		}
		public function index(){
			
			if($this->session->userdata('status')=='login'){
				redirect('administrator');
			}

			// $hasil = null;
			$data['data']=array();
			if ($this->input->post('submit')) {
				// $hasil = $this->Login_model->aksi_login();
				echo "<script>alert('test');<script>";
			}

			// $data['result'] = $hasil;
			$data['content'] = 'page/login';
			$this->load->view("page/login_view",$data);
		}
		public function cek()
		{ 
			$username = $this->input->post('username');
			$pass = $this->input->post('password');

			$cekQuery = $this->db->get_where('user', [
				'user_username' => $username,
				'user_password' => md5($pass),
			]);

			if ($cekQuery->num_rows() > 0) {
				$data_session = array('user_username'=>$username,'status'=>'login');
				$this->session->set_userdata($data_session);
				redirect('administrator');

			}
			else{
				echo "<script>alert('login failed  !');window.location = '". base_url('login') ."';</script>";
			}


		}
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('Wellcome	'));
		}
	}
 ?>