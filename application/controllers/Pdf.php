<?php
/**
* 
*/
class Pdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pdf');
		$this->load->model('Model_admin');
	}
	function riwayat(){


		$data['riwayat']=$this->Model_pdf->riwayat()->row_array();
		$html=$this->load->view('ipk/pdf_biodata',$data,true);
		$pdfFilePath = "Riwayat Hidup.pdf";
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}
	function kartu(){
$id=$this->uri->segment(3);
		$data['cetak']=$this->Model_admin->cetak_kartu($id)->row_array();
		$html=$this->load->view('admin/print_kartu',$data,true);
		$pdfFilePath = "IPK.pdf";
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");


	}
}










?>