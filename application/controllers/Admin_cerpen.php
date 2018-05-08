<?php 
	class Admin_cerpen extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('cerpen');
			$data['content']='Admin/cerpen/cerpen';
			$this->load->view('Admin/admin',$data); 
		}
		function tambah(){
			$data['content']='Admin/cerpen/add_cerpen';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$judul = $this->input->post('judul_cerpen');
			$isi = $this->input->post('isi_cerpen');

			$config = array(
				'upload_path'=> './upload/cerpen/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar_cerpen')) {
			$data=array(
				'judul_cerpen'=>$judul,
				'isi_cerpen'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_cerpen'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('cerpen',$data);
						redirect('index.php/admin_cerpen');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('cerpen',['cerpen_id'=>$id])->row();
			$data['content']='Admin/cerpen/edit_cerpen';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post('judul_cerpen');
			$isi = $this->input->post('isi_cerpen');

			$config = array(
				'upload_path'=> './upload/cerpen/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar_cerpen')) {
			$data=array(
				'judul_cerpen'=>$judul,
				'isi_cerpen'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_cerpen'=> $this->upload->data('file_name')
			);
						$this->db->where('cerpen_id',$id);
						$this->db->update('cerpen',$data);
						redirect('index.php/admin_cerpen');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('cerpen',['cerpen_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_cerpen'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>