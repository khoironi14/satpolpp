<?php


class Pemberi_kerja extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pemberi_kerja');
		$this->load->model('Model_ipk');
	}
	function index(){
		if (isset($_POST['simpan'])) {
			$data=array(
					'user'=>$this->input->post('user_id'),
					'password'=>$this->input->post('password'),
					'email'=>$this->input->post('email'),
					'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
					'jenis_perusahaan'=>$this->input->post('jenis_perusahaan'),
					'provinsi'=>$this->input->post('provinsi'),
					'kabupaten'=>$this->input->post('kabupaten'),
					'kecamatan'=>$this->input->post('kecamatan'),
					'alamat'=>$this->input->post('alamat'),
					'telp_perusahaan'=>$this->input->post('telpon_perusahaan'),
					'nama_kontak'=>$this->input->post('nama_kontak'),
					'hp'=>$this->input->post('hp'),
					'email_pribadi'=>$this->input->post('email_pribadi'),
					'deskripsi_perusahaan'=>$this->input->post('deskripsi')





				);
			$hak='1';
			$user=array(
'username'=>$this->input->post('user_id'),
					'password'=>md5($this->input->post('password')),
					'hak_akses'=>$hak

				);
			$this->Model_pemberi_kerja->save_user($user);
			$this->Model_pemberi_kerja->save_pemberi($data);
			redirect('Welcome/index');
			
		}else{
		$data['provinsi']=$this->Model_ipk->provinsi()->result();
$data['jenis']=$this->Model_pemberi_kerja->jenis_perusahaan()->result();
	$this->load->view('frontend/navigasi');
		$this->load->view('frontend/pemberi_kerja',$data);
		}

	}
	function add_loker(){
		if (isset($_POST['simpan'])) {
			# code...
		}else{

			$this->load->view('ipk/menu');
			$this->load->view('ipk/add_loker');
		}
	}
}







?>