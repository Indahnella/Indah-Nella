<?php 
	class Admin_propil extends CI_Controller{
		public function index(){
			$data['query']= $this->db->get('user');
			$data['user']=$this->session->userdata('user_username');
			$data['content']="Admin/propil/edit_propil";
			$this->load->view("Admin/admin",$data);
		}
		function tambah(){
			$data['query']=array();
			$data['user']=$this->session->userdata('user_username');
			$data['content']='Admin/propil/add_member';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$nama = $this->input->post("user_fullname");
			$email =   $this->input->post("user_email");
			$tempat =   $this->input->post("user_tmp_lahir");
			$tgl	= $this->input->post("user_tgl_lahir");
			$kelas =   $this->input->post("user_kelas");
			$telpon =   $this->input->post("user_no_telpon");
			$alamat =   $this->input->post("user_alamat");

			$config = array(
				'upload_path'=> './upload/user/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('user_photo')) {
			$data=array(
				'user_fullname'=>$nama,
				'user_email'=>$email,
				'user_tmp_lahir' =>$tempat,
				'user_tgl_lahir' =>$tgl,
				'user_kelas' =>$kelas,
				'user_no_telpon' =>$telpon,
				'user_alamat' =>$alamat,
				'data_entri'=>date('Y-m-d'),
				'user_photo'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('user',$data);
						redirect('index.php/admin_propil');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['user']=$this->session->userdata('user_username');
			$data['query']=$this->db->get_where('user',['user_id'=>$id])->row();
			$data['content']='Admin/propil/edit_propil';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post('user_id');
			$nama = $this->input->post("user_fullname");
			$email =   $this->input->post("user_email");
			$tempat =   $this->input->post("user_tmp_lahir");
			$tgl	= $this->input->post("user_tgl_lahir");
			$kelas =   $this->input->post("user_kelas");
			$telpon =   $this->input->post("user_no_telpon");
			$alamat =   $this->input->post("user_alamat");

			$config = array(
				'upload_path'=> './upload/user/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('user_photo')) {
			$data=array(
				'user_fullname'=>$nama,
				'user_email'=>$email,
				'user_tmp_lahir' =>$tempat,
				'user_tgl_lahir' =>$tgl,
				'user_kelas' =>$kelas,
				'user_no_telpon' =>$telpon,
				'user_alamat' =>$alamat,
				'data_entri'=>date('Y-m-d'),
				'user_photo'=> $this->upload->data('file_name')
			);
						$this->db->where('user_id',$id);
						$this->db->update('user',$data);
						redirect('index.php/admin_propil');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('user',['user_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_propil'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>