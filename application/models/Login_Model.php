<?php 
	class Login_model extends CI_Model{
		function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		}
		function aksi_login(){
			// echo "<script>alert('test')</script>";
			$result = null;
			$username = $this->input->post('username');
			$pass = $this->input->post('password');
			$where = array('user_username'=>$username,'user_password'=>$pass);

			$cekQuery = $this->db->get_where('user', [
				'user_username' => $username,
				'user_password' => md5($pass),
			]);

			if ($cekQuery->num_rows() > 0) {
				$data_session = array('user_username'=>$username,'status'=>'login');
				$this->session->set_userdata($data_session);
				redirect('Admin');
			}else{
				// $result = '<label class="label-success">
 			// 		CEK KEMBALI USERNAME dan PASSWORD anda!
 			// 	</label>';

 				echo "<script>alert('login failed !')";
			}
			// $cek = $this->login_model->cek_login('user',$where)->num_rows();
			// if ($cek > 0){
			// 	$data_session = array('user_username'=>$username,'status'=>'login');
			// 	$this->session->set_userdata($data_session);
			// 	redirect('Admin');
			// }else{
			// 	$result = '<label class="label-success">
 		// 			CEK KEMBALI USERNAME dan PASSWORD anda!
 		// 		</label>';
			// }
			return $result;
		}
	}
 ?>
 