<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_shop extends CI_Controller 
{	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	    $config  = array(
	        'first_link' 		=> '&laquo',
	        'first_tag_open' 	=> '<li>',
	        'first_tag_close' 	=> '</li>',
	        'last_link'     	=> '&raquo',
	        'last_tag_open' 	=> '<li>',
	        'last_tag_close' 	=> '</li>',
	        'next_link'     	=> '<span aria-hidden="true">&rsaquo;</span>',
	        'prev_link'     	=> '<span aria-hidden="true">&lsaquo;</span>',
	        'full_tag_open' 	=> '<ul class="pagination pagination-pasific">', #TAG PEMBUKA HASIL PAGINASI'
	        'full_tag_close'	=> '</ul>',
	        'num_tag_open' 		=> '<li>',
	        'num_tag_close' 	=> '</li>',
	        'cur_tag_open'  	=> '<li class="active"><a href="#">', #TAG PEMBUKA TAUTAN YANG SEDANG DIAKSES
	        'cur_tag_close' 	=> '</a></li>',
	        'next_tag_open' 	=> '<li>',
	        'next_tag_close' 	=> '</li>',
	        'prev_tag_open' 	=> '<li>',
	        'prev_tag_close' 	=> '</li>',
	        'base_url'       	=> base_url().'shop/',
	        'total_rows'     	=> count($this->M_crud->tampil_data('v_product')->result_array()),
	        'per_page'       	=> 16,
	        'num_links'      	=> 16,
	        'use_page_numbers' 	=> TRUE,		                 
	    );

	    $segment            	= $this->uri->segment('2');
	    $from               	= $segment > 0 ? (($segment - 1) * $config['per_page']) : $segment; 
	    $this->pagination->initialize($config);
		$this->db->order_by('id_product','desc');
		$product 		 		= $this->M_crud->tampil_data_page('v_product',$config['per_page'],$from)->result_array();

		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();
	    		    
		$data = array (
	        'title_bar'     => 'Karriz Store',
	        'deskripsi'  	=> '',
	        'title'         => 'Karriz Store',     
	        'menu'			=> 1,       
			'product' 	    => $product,
			'contact' 		=> $contact,
		);

		$this->load->view('front/shop',$data);		
	}

	function shop_detail($slug)
	{
		$cek_data = $this->M_crud->tampil_data_where('v_product',array('slug' => $slug))->result_array();

		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();

		if (count($cek_data) > 0) 
		{
			$data = array(
				'title_bar' => $cek_data[0]['nm_product'],
				'cek_data' 	=> $cek_data,
				'related_product' => $this->M_crud->tampil_data_where('v_product',array('nm_kat_product' => $cek_data[0]['nm_kat_product']))->result_array(),
				'contact'	=> $contact,
				'menu' 		=> 'navbar-standart',
				// OPEN GRAPH
				'deskripsi' => $cek_data[0]['deskripsi'],
				'gambar' 	=> base_url()."/file/product/".$cek_data[0]['file_gambar'],
				'title'		=> $cek_data[0]['nm_product'],
			);

			$this->load->view('front/shop_detail',$data);
		}
		else
		{
			// redirect(base_url('page404'));
			$data = array(
				'title_bar' => '',
				'menu' 		=> 'navbar-standart',
			);
			$this->load->view('front/shop_detail',$data);

		}
		
	}
}
