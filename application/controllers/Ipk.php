<?php

/**
* 
*/
class Ipk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_ipk');
	}
	function index(){

		$this->load->view('ipk/menu');
		$this->load->view('ipk/beranda');
	}
	function biodata(){
		$data['jurusan']=$this->Model_ipk->jurusan()->result();
		$data['pendidikan']=$this->Model_ipk->tingkat_pendidikan()->result();
		$data['status']=$this->Model_ipk->status()->result();
		$data['provinsi']=$this->Model_ipk->provinsi()->result();
		$data['agama']=$this->Model_ipk->agama()->result();
		$data['biodata']=$this->Model_ipk->tampil_biodata()->row_array();

		$this->load->view('ipk/menu');
		$this->load->view('ipk/biodata',$data);
	}
	function kabupaten(){
		$idprov=$this->input->post('provinsi');
		$kab=$this->Model_ipk->kabupaten($idprov)->result();
		echo "<option>--Pilih--</option>";
		foreach ($kab as $tampil) {
			$kabu .= "<option value=".$tampil->id.">".$tampil->name."</option>";
		}
		echo $kabu;

	}
	function kecamatan(){
		 $idkab=$this->input->post('kabupaten');
		$kec=$this->Model_ipk->kecamatan($idkab)->result();

		foreach ($kec as $tampilku) {
			$kecamatan .= "<option value=".$tampilku->id.">".$tampilku->name."</option>";
		}
		echo $kecamatan;
	}
	function riwayat_hidup(){
			$data['riwayat']=$this->Model_ipk->riwayat_hidup()->row_array();
		$this->load->view('ipk/menu');
		$this->load->view('ipk/riwayat_hidup',$data);
	}
	function info_loker(){

		$this->load->view('ipk/menu');
		$this->load->view('ipk/info_loker');

	}
	function ubah_pass(){

		if (isset($_POST['simpan'])) {
			
		}else{

				$this->load->view('ipk/menu');
				$this->load->view('ipk/ubahpass');

		}
	}
	function add_loker(){


		if (isset($_POST['simpan'])) {
			
		}else{


			$data['content']='add_ipk_loker';
			$this->load->view('admin/dashboard',$data);
		}
	}
	
	function log_out(){

		
	}
}










?>