<?php

/**
* 
*/
class Model_pdf extends CI_Model
{
	
	function riwayat(){
$user=$this->session->userdata('username');
			$this->db->where('username',$user);
		return $this->db->get('registrasi');
	}
}










?>