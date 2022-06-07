<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_testimoni extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_testimoni'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Testimoni',
			'title' 		  => 'Testimoni', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/testimoni',$data);
	}

	function tambah_data()
	{	
		$data = array(
		'title_bar' 	  	  => 'Form Input Testimoni',
			'title' 		  => 'Form Input Testimoni', //H4
			'stat' 			  => 'new',
			'id_testimoni'		  => '',
			'nm_testimoni'		  => '',
			'tgl_testimoni' 	=> date('Y-m-d'),
			'instansi'		  => '',
			'testimoni' 	  => '',
			'file_thumbnail' 	  => '',		
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/testimoni_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_testimoni->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/testimoni/edit?id='.$field->id_testimoni.'" id="edit" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_testimoni.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->nm_testimoni;
            $row[] = $field->instansi;
            $row[] = $field->testimoni;
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/testimoni/'.$field->file_thumbnail.'">';
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_testimoni->count_all(),
            "recordsFiltered" => $this->M_testimoni->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id = $this->input->post('id_testimoni');
		$nm_testimoni = $this->input->post('nm_testimoni');	
		$tgl_testimoni = $this->input->post('tgl_testimoni');	
		$nm_testimoni = $this->input->post('nm_testimoni');	
		$instansi = $this->input->post('instansi');		
		$testimoni = $this->input->post('testimoni');
		$file = $this->input->post('file');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		


		if ($stat == 'new') 
		{
			$tgl_testimoni 	= date('Y-m-d');
			$id = $this->M_crud->id_num_year('tb_testimoni','id_testimoni','tgl_testimoni');
		}

		$set_data = array(
			'id_testimoni'  => $id,
			'nm_testimoni'  => $nm_testimoni,	
			'testimoni' 	=> $testimoni,
			'tgl_testimoni' => $tgl_testimoni,
			'instansi' 		=> $instansi,		
			'file_thumbnail'=> $file,
 		);

 		if ($stat == 'new') 
 		{
 			$cek_data = $this->M_crud->tampil_data_where('tb_testimoni',array('nm_testimoni' => $nm_testimoni))->result_array();
 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Nama testimoni Sudah Digunakan !';
 			}
 			else
 			{
 				if ($_FILES['file']['name'] != '') 
 				{
 				    $config = array(
 				        'upload_path'   	=> 'file/testimoni',
 				        'allowed_types' 	=> 'gif|jpg|png|jpeg|bmp',
 				        'remove_space'  	=> true,
 				        'overwrite'     	=> false,
 				        'encrypt_name'  	=> false,
 				        'file_name'     	=> $nm_testimoni.'-image',                  
 				        'max_size'      	=> '5000', #FILE SIZE 5 MB
 				        'detect_mime'   	=> true,
 				        'mod_mime_fix'  	=> true,
 				        'file_ext_tolower'	=> true,
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

 				$this->M_crud->ins_data('tb_testimoni',$set_data); 				 				
 			}
 		}
 		else
 		{
 			$ada = 0;
            $cek_data = $this->M_crud->tampil_data_where('tb_testimoni',array('id_testimoni' => $id))->result_array();

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
 					    unlink("./file/testimoni/".$file."");                        
 					}
 				}
 			    $config = array(
 			        'upload_path'   => 'file/testimoni',
 			        'allowed_types' => 'gif|jpg|png|jpeg|bmp',
 			        'remove_space'  => true,
 			        'overwrite'     => false,
 			        'encrypt_name'  => false,
 			        'file_name'     => $nm_testimoni.'-image',                  
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

 			$cek_data = $this->M_crud->tampil_data_where('tb_testimoni',array('nm_testimoni' => $nm_testimoni, 'id_testimoni !=' => $id))->result_array(); 

 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Nama testimoni Sudah Digunakan !';
 			}	
 			else
 			{
 				$this->M_crud->upd_data('tb_testimoni',$set_data,array('id_testimoni' => $id));
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_testimoni',array('id_testimoni' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit testimoni',
 			'title' 		  => 'Form Edit testimoni', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/testimoni_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_testimoni');
 		$cek_data = $this->M_crud->tampil_data_where('tb_testimoni',array('id_testimoni' => $id))->result_array();
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
 				unlink("./file/testimoni/".$cek_data[0]['file_thumbnail']."");  
 			}
 			$this->M_crud->del_data('tb_testimoni',array('id_testimoni' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}
