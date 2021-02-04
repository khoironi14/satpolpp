<?php
/**
 * 
 */
class Pejabat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pejabat');
		$this->load->library('upload');
	}


	function index(){

		$data['pejabat']=$this->Model_pejabat->view_pejabat()->result();
		$data['content']='view_pejabat';
		$this->load->view('admin/dashboard',$data);
	}
	function add_pejabat(){

		if (isset($_POST['simpan'])) {

	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/gambar/",
		'allowed_types'	=>"jpg|png|jpeg",
		'overwrite'	=>TRUE,
		'max_size' =>9024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
$this->upload->do_upload('foto');
			
			
		$gambar=$this->upload->data();
		if ($_FILES['foto']['name'] !="") {
			# code...
		
			$data=[
'nama_jabatan'=>$this->input->post('nama_jabatan',true),
'nama_pns'=>$this->input->post('nama',true),
'gol'=>$this->input->post('golongan',true),
'nip'=>$this->input->post('nip',true),
'kelas_jabatan'=>$this->input->post('kelas'),
'foto'=>$gambar['file_name']

			];


		}else{

$data=[
'nama_jabatan'=>$this->input->post('nama_jabatan',true),
'nama_pns'=>$this->input->post('nama',true),
'gol'=>$this->input->post('golongan',true),
'nip'=>$this->input->post('nip',true),
'kelas_jabatan'=>$this->input->post('kelas'),


];

		}
			$this->db->insert('tb_struktural',$data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Insert Data Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('pejabat/index');
		}else{
$data['content']='add_pejabat';
		$this->load->view('admin/dashboard',$data);


		}
	}


	function edit_pejabat(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/gambar/",
		'allowed_types'	=>"jpg|png|jpeg",
		'overwrite'	=>TRUE,
		'max_size' =>9024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
$this->upload->do_upload('foto');
			
			
		$gambar=$this->upload->data();
		if ($_FILES['foto']['name'] !="") {
			$data=[
'nama_jabatan'=>$this->input->post('nama_jabatan',true),
'nama_pns'=>$this->input->post('nama',true),
'gol'=>$this->input->post('golongan',true),
'nip'=>$this->input->post('nip',true),
'kelas_jabatan'=>$this->input->post('kelas'),
'foto'=>$gambar['file_name']

			];

		}else{
$data=[
'nama_jabatan'=>$this->input->post('nama_jabatan',true),
'nama_pns'=>$this->input->post('nama',true),
'gol'=>$this->input->post('golongan',true),
'nip'=>$this->input->post('nip',true),
'kelas_jabatan'=>$this->input->post('kelas'),
];


		}
			$this->db->where('id_struktural',$id);
			$this->db->update('tb_struktural',$data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Data Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('pejabat/index');
		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->db->get_where('tb_struktural',['id_struktural'=>$id])->row_array();
$data['content']='edit_pejabat';
		$this->load->view('admin/dashboard',$data);


		}
	}

	function hapus(){

		$id=$this->uri->segment(3);
		$this->db->where('id_struktural',$id);
		$this->db->delete('tb_struktural');
		$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Hapus Data Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
		redirect('pejabat/index');
	}
}













?>