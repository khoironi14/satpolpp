<?php
/**
* 
*/
class Document extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();	
	$this->load->model('Model_document');
	
	}
	function add_document(){
		if (isset($_POST['simpan'])) {

			$this->load->library('upload');
	$namafile="file_".date('Y-m-dis');
	$config=array(
		'upload_path' => "./assets/file_pdf/",
		'allowed_types'	=>"pdf",
		'overwrite'	=>TRUE,
		'max_size' =>18024,
		
		'file_name'	=>$namafile


		);

$this->upload->initialize($config);
	if ($_FILES['pdf']['name']) {
		if ($this->upload->do_upload('pdf')) {
			
			
		$gambar=$this->upload->data();
			$data=array(
				'judul_document'=>$this->input->Post('judul'),
				'keterangan'=>$this->input->post('deskripsi'),
				'file'=>$gambar['file_name']

				);
			$this->Model_document->save_doc($data);
			//redirect('Document/view_doc');
		}
	}
		}else{
			$data['content']='add_document';
			$this->load->view('admin/dashboard',$data);


		}
		
	}
	function view_doc(){

		$data['dokument']=$this->Model_document->view_doc()->result();
		$data['content']='view_document';
			$this->load->view('admin/dashboard',$data);
	}
	function tampil_document(){
$this->load->model('Model_berita');
			$data['berita']=$this->Model_berita->berita()->result();
		$data['dokument']=$this->Model_document->tampil_doc()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/document',$data);
		$this->load->view('frontend/footer');
	}
}







?>