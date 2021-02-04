<?php

/**
 * 
 */
class Model_pejabat extends CI_Model
{
	
	function view_pejabat(){
$this->db->order_by('id_struktural','asc');
		return $this->db->get('tb_struktural');
	}
}











?>