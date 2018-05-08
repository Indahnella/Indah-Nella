<?php 
	class Admin_galleri extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('galery');
			$data['content']='Admin/galeri/gallery';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){
			$data['content']='Admin/galeri/add_galeri';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$ket = $this->input->post('ket');

			$config = array(
				'upload_path'=> './upload/galeri/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'ket'=>$ket,
				'data'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('galery',$data);
						redirect('index.php/admin_galleri');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('galery',['gambar_id'=>$id])->row();
			$data['content']='Admin/galeri/edit_galeri';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$ket = $this->input->post('ket');

			$config = array(
				'upload_path'=> './upload/galeri/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'ket'=>$ket,
				'data'=>date('Y-m-d H-s-i'),
				'gambar'=> $this->upload->data('file_name')
			);
						$this->db->where('gambar_id',$id);
						$this->db->update('galery',$data);
						redirect('index.php/admin_galleri');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('galery',['gambar_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_galleri'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>