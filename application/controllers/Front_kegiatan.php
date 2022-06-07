<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_kegiatan extends CI_Controller 
{	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title_bar' => 'Kegiatan',
			'deskripsi' => '',
		);
		$this->load->view('front/kegiatan',$data);
	}

	function kegiatan_detail($slug)
	{
		$cek_data = $this->M_crud->tampil_data_where('v_kegiatan', array('slug' => $slug))->result_array();
		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();

		if (count($cek_data) > 0) 
		{
			$data = array(
				'title_bar' => $cek_data[0]['nm_kegiatan'],
				'menu' 		=> 'navbar-standart',				
				'data' 		=> $cek_data,
				// OPEN GRAPH
				'deskripsi' => $cek_data[0]['deskripsi'],
				'gambar' 	=> base_url()."/file/kegiatan/".$cek_data[0]['file_thumbnail'],
				'title'		=> $cek_data[0]['nm_kegiatan'],
				'contact'   => $contact,
			);

			$this->load->view('front/kegiatan_detail',$data);

		}
		else
		{
			echo "dsa";
			redirect(base_url('page404'));					
		}
	}
}
