<?php
/**
* 
*/
class Model_kategori extends CI_Model
{
	
	function kategori($id){
$this->db->where('kategori_berita',$id);
$this->db->join('kategori_berita','berita.kategori_berita=kategori_berita.id');
$this->db->select('berita.id As idku,judul,isi,tgl_terbit,foto,kategori_berita.id,kategori');
		return $this->db->get('berita');
	}
}









?>