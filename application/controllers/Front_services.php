<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_services extends CI_Controller 
{	
	function __construct()
	{
	parent::__construct();
	}

	public function index()
	{
		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();

		$data = array(
			'title_bar' => 'Layanan',
			'deskripsi' => '',
			'menu' 		=> '',
			'contact' 	=> $contact,
			'layanan' 	=> $this->M_crud->tampil_data('tb_service')->result_array(),			
		);
		$this->load->view('front/services',$data);
	}

	function layanan_detail($slug)
	{
		$cek_data = $this->M_crud->tampil_data_where('tb_service',array('slug' => $slug))->result_array();
		if (count($cek_data) > 0) 
		{
			$product 		= $this->M_crud->tampil_data_where('v_product',array('id_service' => $cek_data[0]['id_service']))->result_array();
			$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();

			$data = array(
				'title_bar' => $cek_data[0]['nm_service'],
				'deskripsi' => '',
				'menu' 		=> 'navbar-standart',
				'cek_data' 	=> $cek_data,
				'product' 	=> $product,
				'contact' 	=> $contact,
			);

			$this->load->view('front/services_detail',$data);
		}
		else
		{
			redirect(base_url('page404'));		
		}
		
	}
}
