<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_kegiatan extends MY_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_kegiatan'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Info & Event',
			'title' 		  => 'Info & Event', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/kegiatan',$data);
	}

	function tambah_data()
	{	
		$data_kat_kegiatan = $this->M_crud->tampil_data('tb_kat_kegiatan')->result_array();
		$data = array(
			'title_bar' 	  => 'Form Input Info & Event',
			'title' 		  => 'Form Input Info & Event', //H4
			'stat' 			  => 'new',
			'id_kegiatan' 		  => '',
			'tgl_kegiatan' 		  => '',
			'nm_kegiatan' 	  => '',
			'kontak_wa' 	  => '',
			'deskripsi' 	  => '',
			'data_kat_kegiatan'   => $data_kat_kegiatan,
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/kegiatan_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_kegiatan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/kegiatan/edit?id='.$field->id_kegiatan.'" id="edit" data-id="'.$field->id_kegiatan.'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_kegiatan.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->tgl_kegiatan;
            $row[] = $field->nm_kegiatan;
            $row[] = $field->nm_kat_kegiatan;
            $row[] = $field->kontak_wa;
            $row[] = substr($field->deskripsi, 0,100);   
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/kegiatan/'.$field->file_thumbnail.'">';                  
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_kegiatan->count_all(),
            "recordsFiltered" => $this->M_kegiatan->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id = $this->input->post('id_kegiatan');
		$tgl_kegiatan = $this->input->post('tgl_kegiatan');
		$nm_kegiatan = $this->input->post('nm_kegiatan');
		$id_kat_kegiatan = $this->input->post('id_kat_kegiatan');
		$slug 	= url_title($nm_kegiatan,'dash',TRUE);
		$deskripsi = $this->input->post('deskripsi');
		$kontak_wa = $this->input->post('kontak_wa');
		$file = $this->input->post('file');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		


		if ($stat == 'new') 
		{
			$tgl_kegiatan 	= date('Y-m-d');
			$id = $this->M_crud->id_num_month_year('tb_kegiatan','id_kegiatan','tgl_kegiatan');
		}

		$set_data = array(
			'id_kegiatan'  => $id,
			'tgl_kegiatan' => $tgl_kegiatan,
			'nm_kegiatan' => $nm_kegiatan,
			'id_kat_kegiatan' 	 => $id_kat_kegiatan,
			'slug' 	=> $slug,
			'kontak_wa' => $kontak_wa,
			'deskripsi' => $deskripsi,
			'file_thumbnail'		=> $file,
 		);

 		if ($stat == 'new') 
 		{
 			$cek_data = $this->M_crud->tampil_data_where('tb_kegiatan',array('nm_kegiatan' => $nm_kegiatan))->result_array();
 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul kegiatan egiatan Sudah Digunakan !';
 			}
 			else
 			{
 				if ($_FILES['file']['name'] != '') 
 				{
 				    $config = array(
 				        'upload_path'   => 'file/kegiatan',
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

 				$this->M_crud->ins_data('tb_kegiatan',$set_data); 				 				
 			}
 		}
 		else
 		{
 			$ada = 0;
            $cek_data = $this->M_crud->tampil_data_where('tb_kegiatan',array('id_kegiatan' => $id))->result_array();

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
 					    unlink("./file/kegiatan/".$file."");                        
 					}
 				}
 			    $config = array(
 			        'upload_path'   => 'file/kegiatan',
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

 			$cek_data = $this->M_crud->tampil_data_where('tb_kegiatan',array('nm_kegiatan' => $nm_kegiatan, 'id_kegiatan !=' => $id))->result_array(); 

 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul kegiatan Sudah Digunakan !';
 			}	
 			else
 			{
 				$this->M_crud->upd_data('tb_kegiatan',$set_data,array('id_kegiatan' => $id));
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_kegiatan',array('id_kegiatan' => $id))->result_array();
		$data_kat_kegiatan = $this->M_crud->tampil_data('tb_kat_kegiatan')->result_array(); 		
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit kegiatan',
 			'title' 		  => 'Form Edit kegiatan', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'data_kat_kegiatan'   => $data_kat_kegiatan,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/kegiatan_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_kegiatan');
 		$cek_data = $this->M_crud->tampil_data_where('tb_kegiatan',array('id_kegiatan' => $id))->result_array();
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
 				unlink("./file/kegiatan/".$cek_data[0]['file_thumbnail']."");  
 			}
 			$this->M_crud->del_data('tb_kegiatan',array('id_kegiatan' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}