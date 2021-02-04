<?php

/**
 * 
 */
class Model_home extends CI_Model
{
	
	function berita(){
		$this->db->limit(5);
		$this->db->order_by('id','desc');

		return $this->db->get("berita");
	}
}





?>