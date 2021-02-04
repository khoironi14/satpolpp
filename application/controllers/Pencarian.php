<?php

/**
* 	
*/
class Pencarian extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
		$this->load->model('Model_ipk');	
		$this->load->model('Model_pencari');
	}
	function pencarikerja(){
		$id=array(
				'judul_loker'=>$this->input->post('kata_kunci'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten')


			);
		$data['pencari']=$this->Model_pencari->pencari($id)->result();
$data['provinsi']=$this->Model_ipk->provinsi()->result();
	$this->load->view('frontend/navigasi');
	$this->load->view('frontend/pencarian',$data);

	}
	function pencari_kerja(){
$this->load->view('frontend/navigasi');
$this->load->view('frontend/form_pencari_kerja');

	}
	function info_kerja(){

		$id=$this->uri->segment(3);
		$data['pencari']=$this->Model_pencari->info_kerja($id)->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/info_kerja',$data);
		$this->load->view('frontend/footer');
	}
}

















?>