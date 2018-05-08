<?php 
	class Admin_puisi extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('puisi');
			$data['content']='Admin/puisi/puisi';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){

			$data['content']='Admin/puisi/add_puisi';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$judul = $this->input->post("judul_puisi");
			$isi =   $this->input->post("isi_puisi");

			$config = array(
				'upload_path'=> './upload/puisi/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_puisi')) {
			$data=array(
				'judul_puisi'=>$judul,
				'isi_puisi'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_puisi'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('puisi',$data);
						redirect('index.php/admin_puisi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('puisi',['puisi_id'=>$id])->row();
			$data['content']='Admin/puisi/edit_puisi';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul_puisi");
			$isi =   $this->input->post("isi_puisi");

			$config = array(
				'upload_path'=> './upload/puisi/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_puisi')) {
			$data=array(
				'judul_puisi'=>$judul,
				'isi_puisi'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_puisi'=> $this->upload->data('file_name')
			);
						$this->db->where('puisi_id',$id);
						$this->db->update('puisi',$data);
						redirect('index.php/admin_puisi');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('puisi',['puisi_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_puisi'); ?>";
				</script>
				<?php
			}
		}
	}
?>