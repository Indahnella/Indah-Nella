<?php
class Admin_berita extends CI_Controller {
	public function index(){
		$data['query']=$this->db->get('berita');
		$data['content']='Admin/berita/berita';
		$this->load->view('Admin/admin',$data);
	}
	function tambah(){
		$data['content']='Admin/berita/add_berita';
		$this->load->view('Admin/admin',$data);
	}
	function save(){
			$judul = $this->input->post("judul_berita");
			$isi =   $this->input->post("isi_berita");

			$config = array(
				'upload_path'=> './upload/berita/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_berita')) {
			$data=array(
				'judul_berita'=>$judul,
				'isi_berita'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_berita'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('berita',$data);
						redirect('index.php/admin_berita');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
	function edit($id){
			$data['query']=$this->db->get_where('berita',['berita_id'=>$id])->row();
			$data['content']='Admin/berita/edit_berita';
			$this->load->view('Admin/admin',$data);
		}
	function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul_berita");
			$isi =   $this->input->post("isi_berita");

			$config = array(
				'upload_path'=> './upload/berita/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar_berita')) {
			$data=array(
				'judul_berita'=>$judul,
				'isi_berita'=>$isi,
				'data_entri'=>date('Y-m-d H-s-i'),
				'gambar_berita'=> $this->upload->data('file_name')
			);
						$this->db->where('berita_id',$id);
						$this->db->update('berita',$data);
						redirect('index.php/admin_berita');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('berita',['berita_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_berita'); ?>";
				</script>
				<?php
			}
	}
}
?>