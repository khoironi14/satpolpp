<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");
//echo date_default_timezone_get();
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_admin');
		$this->load->helper('text');	
	}
	function index(){
		$this->load->model('Model_login');
		if (isset($_POST['login'])) {
			$data=array(
					'username'=>$this->input->post('username'),
					'password'=>md5($this->input->post('password'))



				);
			$this->session->set_userdata($data);
			$cek=$this->Model_login->login($data);
			if ($cek->num_rows() >0) {
				foreach ($cek->result() as $tampil) {
					$session['logged_in']='Sudah login';
				$session['username']=$tampil->username;
				}
				$this->session->set_userdata($session);
				redirect('admin/home');
				
			}else{
$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Gagal',
                              text: 'Periksa Username dan Password',
                              type: 'failed',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");

				redirect('Admin/index');
			}

		}else{
			//$data['content']='home';
		
		$this->load->view('admin/login');
		}
	}
	function home(){


			$this->load->library('session');
		if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}else{

	$data['content']='home';
				$this->load->view('admin/dashboard',$data);

		}
	}
	function log_out(){

		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
	function add_berita(){

			$this->load->library('session');
		if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		if (isset($_POST['simpan'])) {
			
			$this->load->library('upload');
	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/gambar_berita/",
		'allowed_types'	=>"jpg|png|jpeg|pdf",
		'overwrite'	=>TRUE,
		'max_size' =>1024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
if(empty($_FILES['gambar']['name'])){

$data=array(
				'judul'=>$this->input->post('judul_berita',true),
				'isi'=>$this->input->post('ckeditor'),
				'id_kategori'=>$this->input->post('kategori',true),
				'tgl_terbit'=>$this->input->post('tanggal')
				

				);
	$this->Model_admin->save_berita($data);
	$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Insert Data Berhasil ditambahkan',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
	redirect('Admin/view_berita');

	}else if ($_FILES['gambar']['name']) {
		if ($this->upload->do_upload('gambar')) {
			

		$gambar=$this->upload->data();
	$data=array(
				'judul'=>$this->input->post('judul_berita'),
				'isi'=>$this->input->post('ckeditor'),
				'id_kategori'=>$this->input->post('kategori'),
				'foto'=>$gambar['file_name'],
				'tgl_terbit'=>$this->input->post('tanggal')

				);
	$this->Model_admin->save_berita($data);
	redirect('Admin/view_berita');
	}
}

		}else{
$data['kategori']=$this->Model_admin->kategori_berita()->result();
		$data['content']='addberita';
		$this->load->view('admin/dashboard',$data);
		}

	}

	function view_berita(){
if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		$data['content']='viewberita';
		$this->load->view('admin/dashboard',$data);
	}
	function get_data_berita(){
		$list=$this->Model_admin->get_datatables();
		$data=array();
		$no=$_POST['start'];
		foreach ($list as $field) {
			$isi=$field->isi;
   $limit=character_limiter($isi,400);
			$no++;
			$row=array();
			$row[]=$no;
			$row[]=$field->judul;
			$row[]=$limit;
			$row[]=$field->kategori;
				$row[]='<a href="'.base_url('Admin/edit_berita/'.$field->id.'').'" class="btn btn-info">Edit</a> <a href="'.base_url('Admin/hapus_berita/'.$field->id.'').'" class="btn btn-danger">Hapus</a>';

			$data[]=$row;
		}
		$output=array(
			'draw'=>$_POST['draw'],
			'recordsTotal'=>$this->Model_admin->count_all(),
			'recordsFiltered'=>$this->Model_admin->count_filtered(),
			'data'=>$data,
			
                
            

			);
		
		echo json_encode($output);

	}
	function hapus_berita(){

		$id=$this->uri->segment(3);
		$this->Model_admin->hapus_berita($id);
		$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Hapus Berhasil ',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
		redirect('Admin/view_berita');
	}
	function pengumuman(){
		if (isset($_POST['simpan'])) {
			if (isset($_POST['simpan'])) {
			
			$this->load->library('upload');
	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/gambar/pengumuman",
		'allowed_types'	=>"jpg|png|jpeg|pdf",
		'overwrite'	=>TRUE,
		'max_size' =>1024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
	if ($_FILES['foto']['name']) {
		if ($this->upload->do_upload('foto')) {
			
			
		$gambar=$this->upload->data();
			$data=array(
				'foto'=>$gambar['file_name'],
				'link'=>$this->input->post('link')


				);
			$this->Model_admin->save_pengumuman($data);
		}
		}
	}
		}else{
		$data['content']='pengumuman';
		$this->load->view('admin/dashboard',$data);
		}
	}
	function kategori_berita(){
		if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		$data['kategori']=$this->Model_admin->kategori()->result();
		$data['content']='view_kategori';
		$this->load->view('admin/dashboard',$data);
	}
	function add_kategori(){

		if (isset($_POST['simpan'])) {
			$data=array(
					'kategori'=>$this->input->post('kategori')

				);
			$this->Model_admin->add_kategori($data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Kategori Berhasil ditambahkan',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Admin/kategori_berita');
			
		}else{

			$data['content']="addkategori";
			$this->load->view('admin/dashboard',$data);
		}
	}
	function edit_kategori(){

		if (isset($_POST['simpan'])) {
			$idku=$this->input->post('id');
			$data=array(
					'kategori'=>$this->input->post('kategori')

				);
			$this->Model_admin->save_edit_kategori($idku,$data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Kategori Berhasil ',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Admin/kategori_berita');
		}else{
			$id=$this->uri->segment(3);
				$data['edit']=$this->Model_admin->tampil_edit_kategori($id)->row_array();
			$data['content']="editkategori";
			$this->load->view('admin/dashboard',$data);
		}
	}
	function hapus_kategori(){
			$id=$this->uri->segment(3);
			$this->db->where('id',$id);
			 $this->db->delete('kategori_berita');
			 $this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Hapus Berhasil ',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Admin/kategori_berita');

	}
	function edit_berita(){
		if($this->session->userdata('logged_in') != "Sudah login"){
			redirect(base_url("Admin/index"));
		}
		$id=$this->input->post('id');
			if (isset($_POST['simpan'])) {

				$this->load->library('upload');
	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/gambar_berita/",
		'allowed_types'	=>"jpg|png|jpeg|pdf",
		'overwrite'	=>TRUE,
		'max_size' =>5024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
if(empty($_FILES['gambar']['name'])){

$data=array(
				'judul'=>$this->input->post('judul_berita'),
				'isi'=>$this->input->post('ckeditor'),
				'id_kategori'=>$this->input->post('kategori')
				

				);

	$this->Model_admin->save_editberita($id,$data);
	$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
	redirect('Admin/view_berita');

	}else if ($_FILES['gambar']['name']) {
		if ($this->upload->do_upload('gambar')) {
			
			
		$gambar=$this->upload->data();
	$data=array(
				'judul'=>$this->input->post('judul_berita'),
				'isi'=>$this->input->post('ckeditor'),
				'id_kategori'=>$this->input->post('kategori'),
				'foto'=>$gambar['file_name']

				);
	
	$this->Model_admin->save_editberita($id,$data);
	$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Berhasil ',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
	redirect('Admin/view_berita');
	}
}

			}else{
				$id=$this->uri->segment(3);
				$data['edit']=$this->Model_admin->tampil_edit($id)->row_array();
					$data['kategori']=$this->Model_admin->kategori_berita()->result();
		$data['content']='editberita';
		$this->load->view('admin/dashboard',$data);

			}

	}
	function kemenaker(){
if (isset($_POST['simpan'])) {
	
}else{

$data['content']='tentang_kemenaker';
$this->load->view('admin/dashboard',$data);
}

	}
	function info_loker(){
		if (isset($_POST['simpan'])) {
			$tgl=date('Y-m-d');
			$data=array(
					'judul_loker'=>$this->input->post('judul'),
					'Jabatan'=>$this->input->post('jabatan'),
					'deskripsi_pekerjaan'=>$this->input->post('deskripsi'),
					'id_kategori'=>$this->input->post('penempatan'),
					'tgl_publikasi'=>$tgl,
					'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
					'min_pendidikan'=>$this->input->post('pendidikan'),
					'provinsi'=>$this->input->post('provinsi'),
					'kabupaten'=>$this->input->post('kabupaten'),
					'kecamatan'=>$this->input->post('kecamatan'),
					'alamat'=>$this->input->post('alamat'),
					'kategori_golongan'=>$this->input->post('golongan'),
					'jenis_golongan'=>$this->input->post('jenis'),
					'sektor_usaha'=>$this->input->post('sektor_usaha'),
					'kebutuhan'=>$this->input->post('kebutuhan'),
					'tlp_perusahaan'=>$this->input->post('telpon'),
					'persyaratan_umum'=>$this->input->post('keterangan'),
					'persyaratan_khusus'=>$this->input->post('khusus'),
					'berlaku'=>$this->input->post('berlaku')

				);
			$this->Model_admin->save_info($data);
			redirect('Admin/view_kerja');

		}else{
			$data['penempatan']=$this->Model_admin->penempatan()->result();
			$data['provinsi']=$this->Model_admin->provinsi()->result();
			$data['golongan']=$this->Model_admin->golongan_jabatan()->result();
			$data['content']='addinfo';
		$this->load->view('admin/dashboard',$data);
		}
	}
	function view_kerja(){

		$data['kerja']=$this->Model_admin->view_kerja()->result();
		$data['content']='view_infokerja';
		$this->load->view('admin/dashboard',$data);
	}
	function edit_info(){
			if (isset($_POST['simpan'])) {
				$id=$this->input->post('id');
				$data=array(
					'judul_loker'=>$this->input->post('judul'),
					'keterangan'=>$this->input->post('keterangan'),
					'berlaku'=>$this->input->post('berlaku')

				);
				$this->Model_admin->save_edit_info($id,$data);
				redirect('Admin/view_kerja');
			}else{
		$id=$this->uri->segment(3);
		$data['edit']=$this->Model_admin->tampil_edit_info($id)->row_array();
		$data['content']='editloker';
		$this->load->view('admin/dashboard',$data); }
	}
	function hapus_loker(){

	$id=$this->uri->segment(3);
	$this->db->where('id',$id);
	return $this->db->delete('info_kerja');	
		redirect('Admin/view_kerja');
	}
	
	function sejarah(){

if (isset($_POST['simpan'])) {
	$data=[
		'sejarah'=>$this->input->post('sejarah')

	];
	$this->db->where('id_sejarah',1);
	$this->db->update('tb_sejarah',$data);
	redirect('Admin/sejarah');
}else{
		$data['sejarah']=$this->db->get('tb_sejarah')->row_array();
		$data['content']='sejarah';
		$this->load->view('admin/dashboard',$data);

	}
	}
function pesan(){

	$data['pesan']=$this->db->get('tb_kontak_kami')->result();
	$data['content']='pesan';
		$this->load->view('admin/dashboard',$data);

}
function hapus_pesan(){


	$id=$this->uri->segment(3);
	$this->db->where('id_kontak',$id);
	$this->db->delete('tb_kontak_kami');
	$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Hapus Berhasil ',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
	redirect('Admin/pesan');
}	

function upload_struktur(){


	if (isset($_POST['simpan'])) {
			//$this->load->library('upload');
	$config['upload_path']          = './assets/gambar_berita';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 19048;
    $config['max_width']            = 19048;
    $config['max_height']           = 19048;
 
    $this->load->library('upload', $config);
 
   $this->upload->do_upload('foto');
    
  echo    $foto=$this->upload->data();
      
$data=[
'foto'=>$foto['file_name']

];
$this->db->insert('tb_gambar_struktur',$data);
//redirect('Admin/upload_struktur');

	}else{

	$data['content']='struktur_organisasi';
	$this->load->view('admin/dashboard',$data);
}
}	
}






?>