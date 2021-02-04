<?php

/**
* 
*/
class Model_profil extends CI_Model
{
	function profil(){

		return $this->db->get('kemanaker');
	}
	function save_profil($data){
		return $this->db->insert('kemanaker',$data);


	}
	function tampil_profil(){

		return $this->db->get('kemanaker');
	}
	function edit_profil($id){

		$this->db->where('id',$id);
		return $this->db->get('kemanaker');
	}
	function save_edit($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('kemanaker',$data);

	}
	function save_faq($id,$data){
$this->db->where('id',$id);
		return $this->db->update('kemanaker',$data);

	}
}







?>