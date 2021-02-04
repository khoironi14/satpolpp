<?php

/**
* 	
*/
class Model_pemberi_kerja extends CI_Model
{
	
	function jenis_perusahaan(){

		return $this->db->get('jenis_perusahaan');
	}
	function save_pemberi($data){
		return $this->db->insert('profil_pemberikerja',$data);


	}
	function save_user($user){

return $this->db->insert('tb_pengguna',$user);
	}
	function penempatan_kerja(){

		
	}
}








?>