<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_gallery extends MY_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_gallery'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Gallery',
			'title' 		  => 'Gallery', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/gallery',$data);
	}

	function tambah_data()
	{	
		$data_kat_gallery = $this->M_crud->tampil_data('tb_kat_gallery')->result_array();
		$data = array(
			'title_bar' 	  => 'Form Input Gallery',
			'title' 		  => 'Form Input Gallery', //H4
			'stat' 			  => 'new',
			'id_gallery' 	  => '',
			'tgl_gallery' 	  => '',
			'nm_gallery' 	  => '',
			'deskripsi' 	  => '',
			'data_kat_gallery'   => $data_kat_gallery,
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/gallery_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_gallery->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/gallery/edit?id='.$field->id_gallery.'" id="edit" data-id="'.$field->id_gallery.'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_gallery.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->tgl_gallery;
            $row[] = $field->nm_gallery;
            $row[] = $field->nm_kat_gallery;
            $row[] = substr($field->deskripsi, 0,100);   
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/gallery/'.$field->file_thumbnail.'">';                  
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_gallery->count_all(),
            "recordsFiltered" => $this->M_gallery->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id = $this->input->post('id_gallery');
		$tgl_gallery = $this->input->post('tgl_gallery');
		$nm_gallery = $this->input->post('nm_gallery');
		$id_kat_gallery = $this->input->post('id_kat_gallery');
		$slug 	= url_title($nm_gallery,'dash',TRUE);
		$deskripsi = $this->input->post('deskripsi');
		$file = $this->input->post('file');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		


		if ($stat == 'new') 
		{
			$tgl_gallery 	= date('Y-m-d');
			$id = $this->M_crud->id_num_month_year('tb_gallery','id_gallery','tgl_gallery');
		}

		$set_data = array(
			'id_gallery'  => $id,
			'tgl_gallery' => $tgl_gallery,
			'nm_gallery' => $nm_gallery,
			'id_kat_gallery' 	 => $id_kat_gallery,
			'slug' 	=> $slug,
			'deskripsi' => $deskripsi,
			'file_thumbnail'		=> $file,
 		);

 		if ($stat == 'new') 
 		{
 			$cek_data = $this->M_crud->tampil_data_where('tb_gallery',array('nm_gallery' => $nm_gallery))->result_array();
 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul gallery Sudah Digunakan !';
 			}
 			else
 			{
 				if ($_FILES['file']['name'] != '') 
 				{
 				    $config = array(
 				        'upload_path'   => 'file/gallery',
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

 				$this->M_crud->ins_data('tb_gallery',$set_data); 				 				
 			}
 		}
 		else
 		{
 			$ada = 0;
            $cek_data = $this->M_crud->tampil_data_where('tb_gallery',array('id_gallery' => $id))->result_array();

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
 					    unlink("./file/gallery/".$file."");                        
 					}
 				}
 			    $config = array(
 			        'upload_path'   => 'file/gallery',
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

 			$cek_data = $this->M_crud->tampil_data_where('tb_gallery',array('nm_gallery' => $nm_gallery, 'id_gallery !=' => $id))->result_array(); 

 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul gallery Sudah Digunakan !';
 			}	
 			else
 			{
 				$this->M_crud->upd_data('tb_gallery',$set_data,array('id_gallery' => $id));
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_gallery',array('id_gallery' => $id))->result_array();
		$data_kat_gallery = $this->M_crud->tampil_data('tb_kat_gallery')->result_array(); 		
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit gallery',
 			'title' 		  => 'Form Edit gallery', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'data_kat_gallery'   => $data_kat_gallery,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/gallery_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_gallery');
 		$cek_data = $this->M_crud->tampil_data_where('tb_gallery',array('id_gallery' => $id))->result_array();
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
 				unlink("./file/gallery/".$cek_data[0]['file_thumbnail']."");  
 			}
 			$this->M_crud->del_data('tb_gallery',array('id_gallery' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}