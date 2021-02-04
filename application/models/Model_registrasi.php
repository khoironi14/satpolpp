<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_registrasi extends CI_Model
{
	
	function save_registrasi($data){
return $this->db->insert('registrasi',$data);

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
	function negara_kerja(){
		return $this->db->get('tb_negara_pekerja');
	}
	function pendidikan(){
		$this->db->where('id_parent',0);
		return $this->db->get('tingkat_pendidikan');
	}
	function jurusan($jurusan){

		$this->db->where('id_parent',$jurusan);
		return $this->db->get('tingkat_pendidikan');
	}
	function status_perkawinan(){

		return $this->db->get('status_perkawinan');
	}
	function agama(){

		return $this->db->get('agama');
	}
	function golongan_jabatan(){

		$this->db->where('id_parent',0);
		return $this->db->get('jabatan');
	}
	function jenis_gol($id_gol){
		$this->db->where('id_parent',$id_gol);
		return $this->db->get('jabatan');

	}
	function login($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',md5($pass));
		return $this->db->get('tb_pengguna');


	}
	function save_user($user){

return $this->db->insert('tb_pengguna',$user);
	}
	
}







?>