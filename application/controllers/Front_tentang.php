<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_tentang extends CI_Controller 
{	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title_bar' => 'Tentang',
			'deskripsi' => '',
		);
		$this->load->view('front/tentang',$data);
	}
}
