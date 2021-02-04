<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_berita');
		$this->load->model('Model_ipk');
		$this->load->helper('text');
	}
	public function index()
	{
		//$data['lowongan']=$this->Model_berita->kategori_lowongan()->result();
		//$data['pelatihan']=$this->Model_berita->pelatihan()->result();
		$data['provinsi']=$this->Model_ipk->provinsi()->result();
		//$data['lokerdalam']=$this->Model_berita->loker_ipk()->result();
			$data['gallery']=$this->Model_berita->galery()->result();
			$data['video']=$this->Model_berita->video()->result();
		//$data['lokerluar']=$this->Model_berita->loker_luar()->result();
		//$data['dis']=$this->Model_berita->loker_dis()->result();
			$ip=$_SERVER['REMOTE_ADDR'];
			$tgl=date('Y-m-d');
			$kunjung=1;
		
$pe=array(
'ip_pengunjung'=>$ip,
'tgl'=>$tgl,
'pengunjung'=>$kunjung

	);
$this->Model_berita->stastik($pe);
		$data['berita']=$this->Model_berita->berita()->result();
		$stastik['stastik']=$this->Model_berita->view_stastik()->row_array();
	
		
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/header',$data);
		$this->load->view('frontend/footer',$stastik);

	}
	function profil_lembaga(){
			$this->load->view('frontend/navigasi');
		$this->load->view('frontend/profil');
		$this->load->view('frontend/footer');
	}
	function berita(){
		
$data['berita']=$this->Model_berita->berita()->result();
$data['terkini']=$this->Model_berita->berita_terkini()->result();

		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/berita',$data);
		$this->load->view('frontend/footer');
	}
	
	function detail(){
		$id=$this->uri->segment(4);
		$data['detail']=$this->Model_berita->detail_berita($id)->row_array();
		
		$data['pengumuman']=$this->Model_berita->pengumuman()->result();
		$data['berita']=$this->Model_berita->berita()->result();
		$data['terkini']=$this->Model_berita->berita_terkini()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/detail',$data);
		$this->load->view('frontend/footer');
	}
	function tentang(){
		$data['pengumuman']=$this->Model_berita->pengumuman()->result();
		$data['terkini']=$this->Model_berita->berita_terkini()->result();
		$data['berita']=$this->Model_berita->berita()->result();
			$this->load->view('frontend/navigasi');
			$this->load->view('frontend/tentang',$data);
			$this->load->view('frontend/footer');

	}
	function organisasi(){

		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/strukturorganisasi');

	}
	function detail_loker(){
		
		$id=$this->uri->segment(3);
		$data['detail']=$this->Model_berita->detail_loker($id)->row_array();
		

		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/detail_loker',$data);
		$this->load->view('frontend/footer');

	}
	function kabupaten(){
		$idprov=$this->input->post('provinsi');
		$kab=$this->Model_ipk->kabupaten($idprov)->result();
		
		foreach ($kab as $tampil) {
			$kabu .= "<option value=".$tampil->id.">".$tampil->name."</option>";
		}
		echo $kabu;

	}
	function ketenagakerjaan(){
		$data['ketenagakerjaan']=$this->Model_berita->ketenagakerjaan()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/ketenagakerjaan',$data);
		$this->load->view('frontend/footer');

	}
	function lamar_kerja(){

		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/lamar');
		$this->load->view('frontend/footer');
	}
	function pemberi_kerja(){


		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/pemberi_kerja');
		$this->load->view('frontend/footer');
	}
	function cetak_lowongan(){
		$id=$this->uri->segment(3);
		$data['detail']=$this->Model_berita->detail_loker($id)->row_array();
		$html=$this->load->view('frontend/detail_loker',$data,true);
			$pdfFilePath = "Lowongan Kerja.pdf";
//generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
	}
	function informasi_pasarkerja(){

$data['lowongan']=$this->Model_berita->kategori_lowongan()->result();
		$data['pelatihan']=$this->Model_berita->pelatihan()->result();
		$data['provinsi']=$this->Model_ipk->provinsi()->result();
		$data['lokerdalam']=$this->Model_berita->loker_ipk()->result();

		$data['lokerluar']=$this->Model_berita->loker_luar()->result();
		$data['dis']=$this->Model_berita->loker_dis()->result();
		
		$data['berita']=$this->Model_berita->berita()->result();
	
		
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/informasipasarkerja',$data);
		$this->load->view('frontend/footer');

	}
	function kontak_kami(){
		$data['berita']=$this->Model_berita->berita()->result();
$this->load->view('frontend/navigasi');
$this->load->view('frontend/kontakkami',$data);
$this->load->view('frontend/footer');

	}
	function faq(){
$data['terkini']=$this->Model_berita->berita_terkini()->result();
		$data['faq']=$this->Model_berita->faq()->result();
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/faq',$data);
		$this->load->view('frontend/footer');
	}
	function privacy_policies(){
		$this->load->view('frontend/navigasi');
		$this->load->view('frontend/privacy');

	}
	
}
