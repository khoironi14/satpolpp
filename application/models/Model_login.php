<?php

class Model_login extends CI_Model
{
	
	function login($data){
			$this->db->where($data);
			return $this->db->get('tb_user');


	}
}








?>