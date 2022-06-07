<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_gallery extends CI_Controller 
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
	        'base_url'       	=> base_url().'gallery/',
	        'total_rows'     	=> count($this->M_crud->tampil_data('v_gallery')->result_array()),
	        'per_page'       	=> 16,
	        'num_links'      	=> 16,
	        'use_page_numbers' 	=> TRUE,		                 
	    );

	    $segment            	= $this->uri->segment('2');
	    $from               	= $segment > 0 ? (($segment - 1) * $config['per_page']) : $segment; 
	    $this->pagination->initialize($config);
		$this->db->order_by('id_gallery','desc');
		$gallery 		 		= $this->M_crud->tampil_data_page('v_gallery',$config['per_page'],$from)->result_array();
		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();		

	    		    
		$data = array (
	        'title_bar'     => 'Gallery',
	        'deskripsi' 	=> '',
	        'title'         => 'Gallery',     
	        'menu'			=> 1,       
			'gallery' 	    => $gallery,
			'contact' 		=> $contact,
		);

		$this->load->view('front/gallery',$data);
	}
}
