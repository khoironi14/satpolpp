<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_search');
		$this->load->model('Model_berita');
		$this->load->helper('text');
	}
	function index(){
		$search=array(
			'judul'=>$this->input->post('search')


			);
		$data['pengumuman']=$this->Model_berita->pengumuman()->result();
		$data['berita']=$this->Model_berita->berita()->result();
		$data['search']=$this->Model_search->search($search)->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/search',$data);
		$this->load->view('frontend/footer');

	}
}










?>