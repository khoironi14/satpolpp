<?php

/**
* 
*/
class Model_ipk extends CI_Model
{
	
	function agama(){

		return $this->db->get('agama');
	}
	function status(){

		return $this->db->get('status_perkawinan');
	}
	function provinsi(){

		return $this->db->get('provinces');
	}
	function kabupaten($idprov){
		$this->db->where('province_id',$idprov);
		return $this->db->get('regencies');	
	}
	function kecamatan($idkab){
		$this->db->where('regency_id',$idkab);
		return $this->db->get('districts');

	}
	function tingkat_pendidikan(){
			$this->db->where('id_parent',0);
		return $this->db->get('tingkat_pendidikan');
	}
	function jurusan(){

		return $this->db->query("select * from tingkat_pendidikan where id_parent !=0");
	}
	function tampil_biodata(){
		$user=$this->session->userdata('username');
			$this->db->where('username',$user);
		return $this->db->get('registrasi');
	}
	function riwayat_hidup(){

$user=$this->session->userdata('username');
			$this->db->where('username',$user);
		return $this->db->get('registrasi');


	}
	

}









?>