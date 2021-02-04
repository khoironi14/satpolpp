<?php

/**
* 
*/
class Gallery extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_gallery');
	}
	function index(){
		$data['gallery']=$this->Model_gallery->view_slide()->result();
		$data['content']="view_gallery";
		$this->load->view('admin/dashboard',$data);

	}
	function add_gallery(){

		if (isset($_POST['simpan'])) {
			$this->load->library('upload');
	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/slider/",
		'allowed_types'	=>"jpg|png|jpeg|pdf",
		'overwrite'	=>TRUE,
		'max_size' =>9024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
	if ($_FILES['foto']['name']) {
		if ($this->upload->do_upload('foto')) {
			
			
		$gambar=$this->upload->data();
			$data=array(

				'judul'=>$this->input->post('judul'),
				'keterangan'=>$this->input->post('keterangan'),
				'foto'=>$gambar['file_name']


				);
			$this->Model_gallery->save_slide($data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Gallery Berhasil ditambahkan',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Gallery/index');
		}
	}
		}else{
			$data['content']='add_gallery';
			$this->load->view('admin/dashboard',$data);

			
		}
	}

	function edit_gallery(){

		if (isset($_POST['simpan'])) {
			$this->load->library('upload');
			if ($_FILES['foto']['name'] !="") {
	$namafile="file_".time();
	$config=array(
		'upload_path' => "./assets/slider/",
		'allowed_types'	=>"jpg|png|jpeg|pdf",
		'overwrite'	=>TRUE,
		'max_size' =>9024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
	
		$this->upload->do_upload('foto');
			
			
		$gambar=$this->upload->data();
			$data=array(

				'judul'=>$this->input->post('judul'),
				'keterangan'=>$this->input->post('keterangan'),
				'foto'=>$gambar['file_name']


				);

		}else{

			$data=array(

				'judul'=>$this->input->post('judul'),
				'keterangan'=>$this->input->post('keterangan'),
				


				);

	}
		
		$id=$this->input->post('id');
		$this->db->where('id',$id);
			$this->db->update('slider',$data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Gallery/index');
		

		}else{
			$id=$this->uri->segment(3);
			$data['edit']=$this->db->get_where('slider',['id'=>$id])->row_array();
			$data['content']='edit_gallery';
			$this->load->view('admin/dashboard',$data);

			
		}
	}

	function hapus_gallery(){

		$id=$this->uri->segment(3);
		$foto=$this->uri->segment(4);
		unlink("<?php echo base_url('assets/slider/'.$foto.'') ?>");
		$this->db->where('id',$id);
		$this->db->delete('slider');
		$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Hapus Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Gallery/index');

	}
	function tampil_gallery(){

		$data['gallery']=$this->Model_gallery->tampil_slide()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/gallery',$data);
		$this->load->view('frontend/footer');
	}
	function detail_foto(){

		$id=$this->input->post('id');
		$foto=$this->Model_gallery->detail_foto($id)->row_array();
		 $gallery ='<img style="max-width:100%" src='. base_url('assets/slider/'.$foto['foto'].'').'>';
		 echo $gallery;

	}
}








?>