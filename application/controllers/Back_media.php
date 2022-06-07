<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_media	 extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$this->M_crud->_order_by('tgl_upload','desc');
		$data_media  = $this->M_crud->tampil_data('tb_media')->result_array();
		$data = array(
			'title_bar' 	  => 'Media',
			'title' 		  => 'Media', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
			'cek_data' 		  => $data_media, 	 
		);
		$this->load->view('back/media',$data);
	}

	function simpan_data()
	{

		$id = $this->input->post('id');
		$tgl = $this->input->post('tgl_upload');
		$jenis_media = 'image';
		$file  = $this->input->post('file');
		$hasil = 1;
		$err   = '';		

		$id = $this->M_crud->id_num_month_year('tb_media','id_media','tgl_upload');
		

		$set_data = array(
			'id_media'  	=> $id,
			'jenis_media' 	=> $jenis_media,			
			'tgl_upload' 	=> $tgl,
			'file_media'			=> $file,

 		);

 		if ($_FILES['file']['name'] != '') 
 		{
 		    $config = array(
 		        'upload_path'   => 'file/media',
 		        'allowed_types' => 'gif|jpg|png|jpeg|bmp',
 		        'remove_space'  => true,
 		        'overwrite'     => false,
 		        'encrypt_name'  => false,
 		        'file_name'     => $id.'-image',                  
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
 		        $set_data['file_media'] = $data_upload['file_name'];
 		    }
 		}

 		$this->M_crud->ins_data('tb_media',$set_data); 	

 		$data = array(
 			'hasil' => $hasil,
 			'err'	=> $err,
 		);

 		echo json_encode($data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_media');
 		$cek_data = $this->M_crud->tampil_data_where('tb_media',array('id_media' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';


 		if (count($cek_data) == 0) 
 		{
 			$hasil = 0;
 			$err 	= 'Data Tidak Ditemukan !'; 
 		}
 		else
 		{
 			
 			
 			if ($cek_data[0]['file_media'] != '' || $cek_data[0]['file_media'] != NULL) 
 			{				
 				unlink("./file/media/".$cek_data[0]['file_media']."");   			 				
 			}
 			$this->M_crud->del_data('tb_media',array('id_media' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}