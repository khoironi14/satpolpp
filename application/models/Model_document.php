<?php


class Model_document extends CI_Model
{
function save_doc($data){
return $this->db->insert('document',$data);

}	
function view_doc(){


	return $this->db->get('document');
}
function tampil_doc(){


	return $this->db->get('document');
}

	
}





?>