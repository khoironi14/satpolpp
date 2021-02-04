<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Model_berita extends CI_Model
{
	
	function berita(){
		//$this->db->join('kategori_berita','berita.kategori_berita=kategori_berita.id');
		//$this->db->select('berita.id as id_berita,judul,isi,tgl_terbit,kategori_berita,foto,kategori_berita.id,kategori');

		return $this->db->get('berita');
	}
	function kategori_lowongan(){

		return $this->db->query('select count(id_kategori) as jumlah,jabatan.id,id_parent,kategori_golongan,info_kerja.jenis_golongan,jabatan.jenis_golongan as golongan from jabatan join info_kerja on jabatan.id_parent=info_kerja.kategori_golongan where id_parent !=0  group by jenis_golongan');
	}
	
	function agenda(){
		return $this->db->get('agenda');
	}
	function galery(){

		return $this->db->get('slider');
	}
	function loker_ipk(){
		$this->db->where('id_kategori',1);
		return $this->db->get('info_kerja');
	}
	function loker_luar(){

			$this->db->where('id_kategori',2);
		return $this->db->get('info_kerja');

	}

	function loker_dis(){


			$this->db->where('id_kategori',3);
		return $this->db->get('info_kerja');
	}
	function pelatihan(){

		$this->db->where('kategori_berita',13);

		return $this->db->get('berita');
	}
	function info_loker(){

		return $this->db->get('info_kerja');
	}
	function kategori(){

		return $this->db->get('kategori_berita');
	}
	
	function detail_berita($id){
		$this->db->where('id',$id);
return $this->db->get('berita');

	}
	function berita_terkini(){
		$this->db->order_by('id','desc');
		$this->db->limit(5);
		return $this->db->get('berita');
	}
	function pengumuman(){

		return $this->db->get('pengumuman');
	}
	function video(){

		return $this->db->get('video');
	}
	function detail_loker($id){
		$this->db->where('id',$id);
		return $this->db->get('info_kerja');

	}
	function ketenagakerjaan(){
		$this->db->where('kategori_berita',12);
			return $this->db->get('berita');

	}
	function faq(){
			$this->db->select('faq');
		return $this->db->get('kemanaker');
	}
	function stastik($pe){

		return $this->db->insert('tb_stastik_pengunjung',$pe);
	}
	function view_stastik(){

		return $this->db->query('select sum(pengunjung) as jumlah from tb_stastik_pengunjung');
	}
}


?>