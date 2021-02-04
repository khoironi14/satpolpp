<?php

/**
 * 
 */
class Visi extends CI_Controller
{
	
	//function __construct(argument)
	//{
		# code...
	//}

	function index(){
		if (isset($_POST['simpan'])) {
			$data=[
				'visi'=>$this->input->post('visi'),
				'misi'=>$this->input->post('misi')


			];
			$this->db->where('id_visi',1);
			$this->db->update('tb_visi',$data);
			$this->session->set_flashdata('success', "<script> Swal.fire({
                              title: 'Success',
                              text: 'Edit Data Berhasil',
                              type: 'success',
                              showCancelButton: false,
                              confirmButtonColor: '#3085d6',
                              confirmButtonText: 'Ok',
                              closeOnConfirm: true
                  })</script>");
			redirect('Visi/index');
		}else{

		$data['visi']=$this->db->get('tb_visi')->row_array();
		$data['content']='visi';
		$this->load->view('admin/dashboard',$data);

	}
	}
}











?>