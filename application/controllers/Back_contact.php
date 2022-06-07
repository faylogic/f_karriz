<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_contact extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_blog'));
	}

	public function index()
	{
		$stat = 'new';
		$cek_data = $this->M_crud->tampil_data('tb_contact')->result_array();
		if (count($cek_data) > 0) 
		{
			$stat = 'edit';
		}
		$data = array(
			'title_bar' 	  => 'Data Contact',
			'title' 		  => 'Contact', //H4
			'cek_data' 		  => $cek_data,
			'stat' 			  => $stat,
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/contact',$data);
	}

	function simpan_data()
	{
		$id = $this->input->post('id_contact');
		$alamat = $this->input->post('alamat');
		$email 	= $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$no_hp = $this->input->post('no_hp');
		$fb = $this->input->post('fb');
		$tw = $this->input->post('tw');
		$ig = $this->input->post('ig');
		$link_map = $this->input->post('link_map');
		$stat = $this->input->post('stat');
		$hasil = 1;

		$set_data  = array(
			'id_contact' => $id,
			'alamat' => $alamat,
			'email' => $email,
			'no_telp' => $no_telp,
			'no_hp' => $no_hp,
			'fb' => $fb,
			'tw' => $tw,
			'ig' => $ig,
			'link_map' => $link_map,
		);

		if ($stat == 'new') 
		{
			$id = $this->M_crud->id('tb_contact','id_contact','CT');			
			$set_data['id_contact'] = $id;
			$this->M_crud->ins_data('tb_contact',$set_data);
		}
		else
		{
			$this->M_crud->upd_data('tb_contact',$set_data,array('id_contact' => $id));
		}

		$data = array(
			'hasil' => $hasil,
			'err' 	=> '',
		);

		echo json_encode($data);
	}
}