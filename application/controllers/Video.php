<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_video');
		$this->load->model('Model_berita');
	}
	function simpan(){

		if (isset($_POST['simpan'])) {

			$this->load->library('upload');
	$namafile="file_".date('d-m-Y');
	$config=array(
		'upload_path' => "./assets/gambar/gambar_video",
		'allowed_types'	=>"jpg|png|jpeg",
		'overwrite'	=>TRUE,
		'max_size' =>1024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
	if ($_FILES['foto']['name']) {
		if ($this->upload->do_upload('foto')) {
			
			
		$gambar=$this->upload->data();
			$data=array(

				'judul'=>$this->input->post('judul'),
				'gambar'=>$gambar['file_name'],
				'link'=>$this->input->post('link')

				);
			$this->Model_video->simpan($data);
		}
	}
		}else{
			$data['content']='addvideo';
			$this->load->view('admin/dashboard',$data);
			
		}
	}
	function lihat_video(){
		$data['berita']=$this->Model_berita->berita()->result();
		$data['terkini']=$this->Model_berita->berita_terkini()->result();
		$data['video']=$this->Model_video->lihat_video()->row_array();

		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/video',$data);
		$this->load->view('frontend/footer');
	}
}











?>