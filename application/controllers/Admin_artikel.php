<?php 
	class Admin_artikel extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('artikel');
			$data['content']='Admin/artikel/artikel';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){

			$data['content']='Admin/artikel/add_artikel';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$judul = $this->input->post("judul");
			$isi =   $this->input->post("isi");

			$config = array(
				'upload_path'=> './upload/artikel/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_artikel')) {
			$data=array(
				'judul_artikel'=>$judul,
				'isi_artikel'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_artikel'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('artikel',$data);
						redirect('index.php/admin_artikel');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('artikel',['artikel_id'=>$id])->row();
			$data['content']='Admin/artikel/edit_artikel';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul");
			$isi =   $this->input->post("isi");

			$config = array(
				'upload_path'=> './upload/artikel/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_artikel')) {
			$data=array(
				'judul_artikel'=>$judul,
				'isi_artikel'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_artikel'=> $this->upload->data('file_name')
			);
						$this->db->where('artikel_id',$id);
						$this->db->update('artikel',$data);
						redirect('index.php/admin_artikel');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('artikel',['artikel_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_artikel'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>