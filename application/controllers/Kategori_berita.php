<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 	
*/
class Kategori_berita extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kategori');
		$this->load->model('Model_berita');
		$this->load->helper('text');
	}
	function index(){

		$id=$this->uri->segment(3);
		$data['kategori']=$this->Model_kategori->kategori($id)->result();
		$data['berita']=$this->Model_berita->berita()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/kategori',$data);
	}
}










?>