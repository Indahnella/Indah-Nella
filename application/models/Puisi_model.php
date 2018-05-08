<?php 
	class Puisi_model extends CI_Model{
		public function datapuisi(){
			$query= $this->db->get('puisi');
			return $query;
		}
	}
 ?>