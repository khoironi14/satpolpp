<?php

/**
* 
*/
class Profil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_profil');
		$this->load->model('Model_berita');
	}
	function index(){
if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		$data['profil']=$this->Model_profil->profil()->result();
		$data['content']='view_profil';
		$this->load->view('admin/dashboard',$data);
	}
	function add_profil(){

		if (isset($_POST['simpan'])) {
			$data=array(
				'judul_profil'=>$this->input->post('judul_profil'),
				'profil'=>$this->input->post('profil')

				);
			$this->Model_profil->save_profil($data);
		}else{
			$data['content']='form_profil';
		$this->load->view('admin/dashboard',$data);

		}
	}
	function profil(){
		
$data['berita']=$this->Model_berita->berita()->result();
		$data['profil']=$this->Model_profil->tampil_profil()->row_array();
		$stastik['stastik']=$this->Model_berita->view_stastik()->row_array();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/profil',$data);
		$this->load->view('frontend/footer',$stastik);
	}
	function edit_profil(){
		if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(
				'judul_profil'=>$this->input->post('judul_profil'),
				'profil'=>$this->input->post('profil')

				);
			$this->Model_profil->save_edit($id,$data);
			redirect('Profil/index');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->Model_profil->edit_profil($id)->row_array();
			$data['content']='edit_profil';
			$this->load->view('admin/dashboard',$data);
		}
	}
	function faq(){
if (isset($_POST['simpan'])) {
	$id=$this->input->post('id');
	$data=array(
			'faq'=>$this->input->post('ckeditor')

		);
	$this->Model_profil->save_faq($id,$data);
	redirect('Profil/faq');
}else{

		$data['faq']=$this->Model_profil->tampil_profil()->row_array();
		$data['content']='faq';
			$this->load->view('admin/dashboard',$data);
			}
	}
}







?>