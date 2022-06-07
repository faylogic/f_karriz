<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_service extends MY_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_service'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Service',
			'title' 		  => 'Service', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/service',$data);
	}

	function tambah_data()
	{	
		$data_service = $this->M_crud->tampil_data('tb_service')->result_array();
		$data = array(
			'title_bar' 	  => 'Form Input Service',
			'title' 		  => 'Form Input Service', //H4
			'stat' 			  => 'new',
			'id_service' 		  => '',
			'nm_service' 		  => '',
			'file_service' 	  => '',
			'deskripsi' 	  => '',
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/service_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_service->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) 
        {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/service/edit?id='.$field->id_service.'" id="edit" data-id="'.$field->id_service.'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_service.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->nm_service;            
            $row[] = substr($field->deskripsi, 0,100);   
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/service/'.$field->file_thumbnail.'">';                  
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_service->count_all(),
            "recordsFiltered" => $this->M_service->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id = $this->input->post('id_service');
		$nm_service = $this->input->post('nm_service');
		$slug 	= url_title($nm_service,'dash',TRUE);
		$deskripsi = $this->input->post('deskripsi');
		$file = $this->input->post('file');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		


		if ($stat == 'new') 
		{
			$id = $this->M_crud->id('tb_service','id_service','SV');
		}

		$set_data = array(
			'id_service'  => $id,
			'nm_service' => $nm_service,
			'slug' 	=> $slug,
			'deskripsi' => $deskripsi,
			'file_thumbnail'		=> $file,
 		);

 		if ($stat == 'new') 
 		{
 			$cek_data = $this->M_crud->tampil_data_where('tb_service',array('nm_service' => $nm_service))->result_array();
 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul service Sudah Digunakan !';
 			}
 			else
 			{
 				if ($_FILES['file']['name'] != '') 
 				{
 				    $config = array(
 				        'upload_path'   => 'file/service',
 				        'allowed_types' => 'gif|jpg|png|jpeg|bmp',
 				        'remove_space'  => true,
 				        'overwrite'     => false,
 				        'encrypt_name'  => false,
 				        'file_name'     => $slug.'-image',                  
 				        'max_size'      => '5000', #FILE SIZE 5 MB
 				        'detect_mime'   => true,
 				        'mod_mime_fix'  => true,
 				        'file_ext_tolower'=> true,
 				    );

 				    $this->load->library('upload',$config);
 				    $this->upload->initialize($config);

 				    if (!$this->upload->do_upload('file')) 
 				    {
 				        $hasil = 0;
 				        $err   = 'File Gagal Diupload ! Silahkan Cek Format dan Ukuran File Size !';
 				    }
 				    else
 				    {
 				        $data_upload = $this->upload->data();                
 				        $data_upload = $this->upload->data(); 
 				        $set_data['file_thumbnail'] = $data_upload['file_name'];
 				    }
 				}

 				$this->M_crud->ins_data('tb_service',$set_data); 				 				
 			}
 		}
 		else
 		{
 			$ada = 0;
            $cek_data = $this->M_crud->tampil_data_where('tb_service',array('id_service' => $id))->result_array();

            if (count($cek_data) > 0) 
            {
            	$ada = 1;
            }
 			if ($_FILES['file']['name'] != '') 
 			{
 				if ($ada == 1) 
 				{
 					$file = $cek_data[0]['file_thumbnail'];
 					if ($file != NULL || $file != '') 
 					{
 					    unlink("./file/service/".$file."");                        
 					}
 				}
 			    $config = array(
 			        'upload_path'   => 'file/service',
 			        'allowed_types' => 'gif|jpg|png|jpeg|bmp',
 			        'remove_space'  => true,
 			        'overwrite'     => false,
 			        'encrypt_name'  => false,
 			        'file_name'     => $slug.'-image',                  
 			        'max_size'      => '5000', #FILE SIZE 5 MB
 			        'detect_mime'   => true,
 			        'mod_mime_fix'  => true,
 			        'file_ext_tolower'=> true,
 			    );

 			    $this->load->library('upload',$config);
 			    $this->upload->initialize($config);

 			    if (!$this->upload->do_upload('file')) 
 			    {
 			        $hasil = 0;
 			        $err   = 'File Gagal Diupload ! Silahkan Cek Format dan Ukuran File Size !';
 			    }
 			    else
 			    {
 			        $data_upload = $this->upload->data();                
 			        $data_upload = $this->upload->data(); 
 			        $set_data['file_thumbnail'] = $data_upload['file_name'];
 			    }
 			}
 			else
 			{
 				if ($ada == 1) 
 				{
 				    $set_data['file_thumbnail'] = $cek_data[0]['file_thumbnail'];
 				}
 			}

 			$cek_data = $this->M_crud->tampil_data_where('tb_service',array('nm_service' => $nm_service, 'id_service !=' => $id))->result_array(); 

 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul service Sudah Digunakan !';
 			}	
 			else
 			{
 				$this->M_crud->upd_data('tb_service',$set_data,array('id_service' => $id));
 			}		
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err'	=> $err,
 		);

 		echo json_encode($data);
 	}

 	function edit_data()
 	{
 		$id = $this->input->get('id');
 		$cek_data = $this->M_crud->tampil_data_where('tb_service',array('id_service' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit Service',
 			'title' 		  => 'Form Edit Service', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/service_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_service');
 		$cek_data = $this->M_crud->tampil_data_where('tb_service',array('id_service' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil = 0;
 			$err 	= 'Data Tidak Ditemukan !'; 
 		}
 		else
 		{
 			if ($cek_data[0]['file_thumbnail'] != '' || $cek_data[0]['file_thumbnail'] != NULL) 
 			{
 				unlink("./file/service/".$cek_data[0]['file_thumbnail']."");  
 			}
 			$this->M_crud->del_data('tb_service',array('id_service' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}