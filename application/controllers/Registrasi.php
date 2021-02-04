<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_registrasi');
		$this->load->model('Model_berita');
	}
	function simpan_registrasi(){
			$data=array(

				'username'=>$this->input->post('username'),
				'alamat'=>$this->input->post('alamat'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'kata_sandi'=>$this->input->post('password')
				

				


				);
			$p=$_POST['daftar'];
			if ($p==1) {
				
			
			//$this->Model_registrasi->save_registrasi($data);
			$data['berita']=$this->Model_berita->berita()->result();
			$data['provinsi']=$this->Model_registrasi->provinsi()->result();
			$data['pendidikan']=$this->Model_registrasi->pendidikan()->result();
			$data['negara']=$this->Model_registrasi->negara_kerja()->result();
			$data['golongan']=$this->Model_registrasi->golongan_jabatan()->result();
			$data['status']=$this->Model_registrasi->status_perkawinan()->result();
			$data['agama']=$this->Model_registrasi->agama()->result();

			//$this->Model_registrasi->save_registrasi($data);
			$this->load->view('frontend/navigasi');
			$this->load->view('frontend/detail_registrasi',$data);
			$this->load->view('frontend/footer');
		}else{
$this->load->view('frontend/navigasi');
$data['provinsi']=$this->Model_registrasi->provinsi()->result();
			$this->load->view('frontend/pemberi_kerja',$data);
			$this->load->view('frontend/footer');

		}

	}
	function saveku(){

		$data=array(

			'username'=>$this->input->post('userid'),
			'alamat'=>$this->input->post('alamat'),
			'password'=>md5($this->input->post('sandi')),
			'email'=>$this->input->post('email'),
			'no_nik'=>$this->input->post('ktp'),

		
			'nama_lengkap'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat'),
			'tanggal_lahir'=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'agama'=>$this->input->post('agama'),
			'status_perkawinan'=>$this->input->post('status'),
			'kewarganegaraan'=>$this->input->post('kewarganegaraan'),
			'tinggi'=>$this->input->post('tinggi_badan'),
			'provinsi'=>$this->input->post('provinsi'),
			'kabupaten'=>$this->input->post('kab'),
			'kecamatan'=>$this->input->post('kecamatan'),
			'kode_pos'=>$this->input->post('kode_pos'),
			'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
			'jabatan'=>$this->input->post('jabatan_kerja'),
			'deskripsi_pekerjaan'=>$this->input->post('deskripsi_pekerjaan'),
			'gaji'=>$this->input->post('gaji'),
			'provinsi_kerja'=>$this->input->post('lokasi_kerja'),
			'kabupaten_kerja'=>$this->input->post('kabupaten_kerja'),
			'negara'=>$this->input->post('negara'),
			'jabatan_diinginkan'=>$this->input->post('jabatan'),

			'tingkat_pendidikan'=>$this->input->post('tingkatpendidikan'),
			'jurusan'=>$this->input->post('jurusan'),
			'nama_instansi'=>$this->input->post('instansi'),
			'tahun_lulus_pendidikan'=>$this->input->post('tahun_lulus_pendidikan'),
			'nilai_ijazah'=>$this->input->post('ijazah'),
			'nama_pelatihan'=>$this->input->post('pelatihan'),
			'lembaga_pelatihan'=>$this->input->post('lembaga'),
			'tahun_lulus_pelatihan'=>$this->input->post('tahun_lulus_pelatihan'),
			'nilia_sertifikat'=>$this->input->post('nilai_setifikat')


			);
		$user=array(
'username'=>$this->input->post('userid'),
'password'=>md5($this->input->post('sandi'))
			);
		$this->Model_registrasi->save_user($user);
		$cek=$this->Model_registrasi->save_registrasi($data);
		
	}
	function kabupaten(){
		$idprov=$this->input->post('provinsi');
		$kab=$this->Model_registrasi->kabupaten($idprov)->result();
		echo "<option>--Pilih--</option>";
		foreach ($kab as $tampil) {
			$kabu .= "<option value=".$tampil->id.">".$tampil->name."</option>";
		}
		echo $kabu;

	}
	function kecamatan(){
		 $idkab=$this->input->post('kabupaten');
		$kec=$this->Model_registrasi->kecamatan($idkab)->result();

		foreach ($kec as $tampilku) {
			$kecamatan .= "<option value=".$tampilku->id.">".$tampilku->name."</option>";
		}
		echo $kecamatan;
	}
	function jenis_golongan(){

		$id_gol=$this->input->post('golongan');
		$gol=$this->Model_registrasi->jenis_gol($id_gol)->result();
		foreach ($gol as $view) {
			$golonganku .= "<option value=".$view->id.">".$view->jenis_golongan."</option>";
		}
echo $golonganku;

	}
	function tingkat_pendidikan(){
		$jurusan=$this->input->post('tingkatpendidikan');
		$jur=$this->Model_registrasi->jurusan($jurusan)->result();

		foreach ($jur as $tampilku) {
			$tingkat .= "<option value=".$tampilku->id.">".$tampilku->jenjang."</option>";
		}
		echo $tingkat;
	}

	function login(){
$data=array(
	'username'=>$this->input->post('user'),
	'kata_sandi'=>md5($this->input->post('password'))


	);
$user=$this->input->post('user');
$pass=$this->input->post('password');
		$cek=$this->Model_registrasi->login($user,$pass);
		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $tampil) {
				$sess_data['logged_in']='Sudah login';
					$sess_data['username']=$tampil->username;
					$sess_data['hak_akses']=$tampil->hak_akses;
			}
			$user=$this->session->set_userdata($sess_data);
			echo "1";

		}else{
			echo "0";
		}
	}
	
	
}



?>	