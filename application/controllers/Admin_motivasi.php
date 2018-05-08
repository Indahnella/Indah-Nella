<?php 
	class Admin_motivasi extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('motivasi');
			$data['content']='Admin/kata_bijak/motivasi';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){

			$data['content']='Admin/kata_bijak/add_motivasi';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$isi = $this->input->post("isi_motivasi");
			$pembuat =   $this->input->post("pembuat_motivasi");

			$config = array(
				'upload_path'=> './upload/kata_bijak/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'isi_motivasi'=>$isi,
				'pembuat_motivasi'=>$pembuat,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('motivasi',$data);
						redirect('index.php/admin_motivasi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('motivasi',['motivasi_id'=>$id])->row();
			$data['content']='Admin/kata_bijak/edit_motivasi';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$isi = $this->input->post("isi_motivasi");
			$pembuat =  $this->input->post("pembuat_motivasi");

			$config = array(
				'upload_path'=> './upload/kata_bijak/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'isi_motivasi'=>$isi,
				'pembuat_motivasi'=>$pembuat,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
						$this->db->where('motivasi_id',$id);
						$this->db->update('motivasi',$data);
						redirect('index.php/admin_motivasi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('motivasi',['motivasi_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_motivasi'); ?>";
				</script>
				<?php
			}
		}
	}
	?>
