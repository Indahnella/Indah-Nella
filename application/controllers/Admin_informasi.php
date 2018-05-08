<?php 
	class Admin_informasi extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('info_sekolah');
			$data['content']='Admin/info/informasi';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){

			$data['content']='Admin/info/add_info';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$judul = $this->input->post("judul_info");
			$isi =   $this->input->post("isi_info");

			$config = array(
				'upload_path'=> './upload/info/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_info')) {
			$data=array(
				'judul_info'=>$judul,
				'isi_info'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_info'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('info_sekolah',$data);
						redirect('index.php/admin_informasi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('info_sekolah',['info_id'=>$id])->row();
			$data['content']='Admin/info/edit_info';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul_info");
			$isi =   $this->input->post("isi_info");

			$config = array(
				'upload_path'=> './upload/info/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_info')) {
			$data=array(
				'judul_info'=>$judul,
				'isi_info'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_info'=> $this->upload->data('file_name')
			);
						$this->db->where('info_id',$id);
						$this->db->update('info_sekolah',$data);
						redirect('index.php/admin_informasi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('info_sekolah',['info_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_informasi'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>