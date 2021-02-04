<?php
/**
* 
*/
class Model_user extends CI_Model
{
	
	function admin(){

		return $this->db->get('tb_user');
	}
	function add_user($data){

			return $this->db->insert('tb_user',$data);
	}
	function hapus_user($id){
			$this->db->where('id',$id);

				return $this->db->delete('tb_user');
	}
	function tampil_edit($id){
		$this->db->where('id',$id);
		return $this->db->get('tb_user');

	}
	function save_edit($id,$data){
			$this->db->where('id',$id);
			return $this->db->update('tb_user',$data);

	}
}






?>