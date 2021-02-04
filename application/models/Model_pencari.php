<?php


class Model_pencari extends CI_Model
{
	
	function pencari($id){

			$this->db->like($id);
			return $this->db->get('info_kerja');
	}
	function info_kerja($id){
		$this->db->where('kategori_golongan',$id);

return $this->db->get('info_kerja');

	}
}








?>