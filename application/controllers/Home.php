<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
		$this->load->helper('text');

	}

	public function index(){
		$data['title']='Home';
		$data['berita']=$this->Model_home->berita()->result();
$this->load->view('frontend/menu');
$this->load->view('frontend/content',$data);
$this->load->view('frontend/footer');

	}


	public function visi(){

		$data['title']='Visi';
		$data['visi']=$this->db->get('tb_visi')->row_array();
		$this->load->view('frontend/menu');
$this->load->view('frontend/visi',$data);
$this->load->view('frontend/footer');

	}

	public function misi(){

		$data['title']='Misi';
		$data['visi']=$this->db->get('tb_visi')->row_array();
		$this->load->view('frontend/menu');
$this->load->view('frontend/misi',$data);	
$this->load->view('frontend/footer');
	}

	public function sejarah(){
$data['title']='Sejarah';
		$data['sejarah']=$this->db->get('tb_sejarah')->row_array();
		$this->load->view('frontend/menu');
$this->load->view('frontend/sejarah',$data);
$this->load->view('frontend/footer');


	}

	public function profil_pejabat(){

		$data['title']='Profil Pejabat';
		$data['profil']=$this->db->get('tb_struktural')->result();
		$this->load->view('frontend/menu');
$this->load->view('frontend/profil_pejabat',$data);
$this->load->view('frontend/footer');

	}

	public function detail_berita(){

		$id=$this->uri->segment(3);
		$data['title']='Berita';
		$data['detail']=$this->db->get_where('berita',['id'=>$id])->row_array();
		$this->load->view('frontend/menu');
$this->load->view('frontend/detail_berita',$data);

	}


	public function berita(){

		$data['title']='Berita';
		$data['berita']=$this->db->get('berita')->result();
		$this->load->view('frontend/menu');
		$this->load->view('frontend/berita',$data);
		$this->load->view('frontend/footer');
	}


	public function cari_berita(){

$data['title']='Berita';
		$berita=$this->input->post('berita',true);
		$data['berita']=$this->db

		->like('judul',$berita)
		->get('berita')->result();
		$this->load->view('frontend/menu');
		$this->load->view('frontend/berita',$data);

	}


	public function gallery(){

		$data['gallery']=$this->db->get('slider')->result();
		$this->load->view('frontend/menu');
		$this->load->view('frontend/gallery',$data);
		$this->load->view('frontend/footer');


	}
	public function zoom_foto(){

		$id=$this->input->post('id_foto');
		$data=$this->db->get_where('slider',['id'=>$id])->row_array();
		echo json_encode($data);

	}

	public function kontak_kami(){

		if (isset($_POST['simpan'])) {
			$data=[
				'nama'=>$this->input->post('nama',true),
				'email'=>$this->input->post('email',true),
				'alamat'=>$this->input->post('alamat',true),
				'judul'=>$this->input->post('judul',true),
				'pesan'=>$this->input->post('pesan',true)


			];
			$this->db->insert('tb_kontak_kami',$data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Pesan Telah Berhasil dikirim
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('home/kontak_kami');
		

	

	}else{
	$data['title']='Hubungi Kami';
		$this->load->view('frontend/menu');
		$this->load->view('frontend/kontak_kami',$data);
		$this->load->view('frontend/footer');

	}
	}

	function organisasi(){

		$data['title']='Struktur Orginasi ';
			$this->load->view('frontend/menu');
		$this->load->view('frontend/organisasi',$data);
		$this->load->view('frontend/footer');

	}
}









?>