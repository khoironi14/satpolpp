<?php


class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
	}
	function admin(){

		$data['admin']=$this->Model_user->admin()->result();
		$data['content']='view_admin';
		$this->load->view('admin/dashboard',$data);
	}
	function add_user(){

		if (isset($_POST['simpan'])) {
			$data=array(
					'username'=>$this->input->post('username'),
					'password'=>md5($this->input->post('password'))

				);
$this->Model_user->add_user($data);
redirect('User/admin');
		}else{
$data['content']='add_user';
		$this->load->view('admin/dashboard',$data);

		}
	}
	function hapus_user(){


		$id=$this->uri->segment(3);
		$this->Model_user->hapus_user($id);
		redirect('User/admin');
	}
	function edit_user(){

		if (isset($_POST['simpan'])) {
			$id=$this->input->post('id');
			$data=array(

					'username'=>$this->input->post('username')
				);
			$this->Model_user->save_edit($id,$data);
			redirect('User/admin');
		}else{
$id=$this->uri->segment(3);
$data['edit']=$this->Model_user->tampil_edit($id)->row_array();
$data['content']='edit_user';
		$this->load->view('admin/dashboard',$data);

		}
	}
}







?>