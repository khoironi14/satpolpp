<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Model_search extends CI_Model
{
	
	function search($search){
		$this->db->like($search);
		return $this->db->get('berita');

	}
}







?>