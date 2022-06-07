<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_kat_gallery extends MY_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_kat_gallery'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Kategori Gallery',
			'title' 		  => 'Kategori Gallery', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/kategori_gallery',$data);
	}

	function tampil_data()
	{
		$list = $this->M_kat_gallery->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) 
        {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="javascript:void(0)" onclick="edit_data(this)" id="edit" data-id="'.$field->id_kat_gallery.'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_kat_gallery.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          
            $row[] = $field->nm_kat_gallery;                     
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_kat_gallery->count_all(),
            "recordsFiltered" => $this->M_kat_gallery->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{
		$id = $this->input->post('id_kat_gallery');
		$nm_kat_gallery = $this->input->post('nm_kat_gallery');
		$stat 	  = $this->input->post('stat');
		$hasil 	= 1;
		$err = '';

		if ($stat == 'new') 
		{
			$id = $this->M_crud->id('tb_kat_gallery','id_kat_gallery','KT');
		}

		$set_data  = array(
			'id_kat_gallery' => $id,
			'nm_kat_gallery' 	=> $nm_kat_gallery,			
		);

		if ($stat == 'new') 
		{
			$cek_data = $this->M_crud->tampil_data_where('tb_kat_gallery',array('nm_kat_gallery' => $nm_kat_gallery))->result_array();
			if (count($cek_data) > 0) 
			{
				$hasil = 0;
				$err   = 'Kategori Product Tersebut Sudah Digunakan !';
			}
			else
			{
				$this->M_crud->ins_data('tb_kat_gallery',$set_data);
			}
		}
		else
		{
			$cek_data = $this->M_crud->tampil_data_where('tb_kat_gallery',array('nm_kat_gallery' => $nm_kat_gallery, 'id_kat_gallery !=' => $id))->result_array();

			if (count($cek_data) > 0) 
			{
				$hasil = 0;
				$err   = 'Kategori Product Tersebut Sudah Digunakan !';
			}
			else
			{
				$this->M_crud->upd_data('tb_kat_gallery',$set_data,array('id_kat_gallery' => $id));
			}
		}

		$data = array(
			'hasil' => $hasil,
			'err'  	=> $err,
		);

		echo json_encode($data);
	}

	function edit_data()
	{
		$id = $this->input->post('id_kat_gallery');
		$cek_data 	 = $this->M_crud->tampil_data_where('tb_kat_gallery',array('id_kat_gallery' => $id))->result_array();
		$hasil 		= 1;
		$err 		= '';

		if (count($cek_data) == 0) 
		{
			$hasil = 0;
			$err = 'Data Tidak Ditemukan !';
		}		

		$data = array(
			'hasil' => $hasil,
			'err' 	=> $err,
			'cek_data' => $cek_data,
		);

		echo json_encode($data);	
	}

	function delete_data()
	{
		$id = $this->input->post('id_kat_gallery');
		$hasil = 1;
		$err = '';
		$cek_data = $this->M_crud->tampil_data_where('tb_kat_gallery',array('id_kat_gallery' => $id))->result_array();
		
		if (count($cek_data) == 0) 
		{
			$hasil = 0;
			$err 	= 'Data Tidak Ditemukan !';
		}
		else
		{
			$this->M_crud->del_data('tb_kat_gallery',array('id_kat_gallery' => $id));
		}
		
		$data = array(
			'hasil' => $hasil,
			'err' 	=> $err,
		);

		echo json_encode($data);	
	}
}