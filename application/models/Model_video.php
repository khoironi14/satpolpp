<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model_video extends CI_Model
{
	
	function simpan($data){
		return $this->db->insert('video',$data);


	}
	function lihat_video(){

		return $this->db->get('video');
	}
}





?>