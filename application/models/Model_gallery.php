<?php

/**
* 
*/
class Model_gallery extends CI_Model
{
	
	function view_slide(){

		return $this->db->get('slider');
	}
	function save_slide($data){
		return $this->db->insert('slider',$data);

	}
	function tampil_slide(){
		return $this->db->get('slider');
		
	}
	function detail_foto($id){
		$this->db->where('id',$id);
		
		return $this->db->get('slider');

	}
}







?>