<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_slideshow extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_slideshow'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Slideshow',
			'title' 		  => 'Slideshow', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/slideshow',$data);
	}

	function tambah_data()
	{	
		$data = array(
		'title_bar' 	      => 'Form Input Slideshow',
			'title' 		  => 'Form Input Slideshow', //H4
			'stat' 			  => 'new',
			'id_slideshow' 	  => '',
			'link' 		      => '',			
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/slideshow_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_slideshow->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) 
        {
            $status_aktif = "<a class='btn btn-sm btn-info' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_slideshow."'>PASIF</a>";
            if ($field->status_aktif == 1) 
            {
                $status_aktif = "<a class='btn btn-sm btn-success' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_slideshow."'>AKTIF</a>";
            }

            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/slideshow/edit?id='.$field->id_slideshow.'" id="edit" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_slideshow.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->link;           
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/slideshow/'.$field->file_slideshow.'">';
            $row[] = $status_aktif;                    
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_slideshow->count_all(),
            "recordsFiltered" => $this->M_slideshow->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id = $this->input->post('id_slideshow');
		$link = $this->input->post('link');		
		$file = $this->input->post('file');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		


		if ($stat == 'new') 
		{
			$id = $this->M_crud->id('tb_slideshow','id_slideshow','SL');
		}

		$set_data = array(
			'id_slideshow'  => $id,
			'link' => $link,			
			'file_slideshow'		=> $file,
 		);

 		if ($stat == 'new') 
 		{
            if ($_FILES['file']['name'] != '') 
            {
                $config = array(
                    'upload_path'   => 'file/slideshow',
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
                    $set_data['file_slideshow'] = $data_upload['file_name'];
                }
            }

            $this->M_crud->ins_data('tb_slideshow',$set_data); 
 		}
 		else
 		{
            $boleh = 1;
            $cek_data = $this->M_crud->tampil_data_where('tb_slideshow',array('id_slideshow' => $id))->result_array();

            if (count($cek_data) > 0) 
            {
                if ($_FILES['file']['name'] != '') 
                {
                    $file = $cek_data[0]['file_slideshow'];
                    if ($file != NULL || $file != '') 
                    {
                        unlink("./file/slideshow/".$file."");                        
                    }
                   
                    $config = array(
                        'upload_path'   => 'file/slideshow',
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
                        $boleh = 0;
                    }
                    else
                    {
                        $data_upload = $this->upload->data(); 
                        $set_data['file_slideshow'] = $data_upload['file_name'];
                    }
                }
                else
                {
                    $set_data['file_slideshow'] = $cek_data[0]['file_slideshow'];
                    
                }

                if ($boleh == 1) 
                {
                    $this->M_crud->upd_data('tb_slideshow',$set_data,array('id_slideshow' => $id));
                }

            }
            else
            {
                $hasil = 0;
 				$err 	= 'Data Tidak Ditemukan !';
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_slideshow',array('id_slideshow' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit Slideshow',
 			'title' 		  => 'Form Edit Slideshow', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/slideshow_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_slideshow');
 		$cek_data = $this->M_crud->tampil_data_where('tb_slideshow',array('id_slideshow' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil = 0;
 			$err 	= 'Data Tidak Ditemukan !'; 
 		}
 		else
 		{
 			if ($cek_data[0]['file_slideshow'] != '' || $cek_data[0]['file_slideshow'] != NULL) 
 			{
 				unlink("./file/slideshow/".$cek_data[0]['file_slideshow']."");  
 			}
 			$this->M_crud->del_data('tb_slideshow',array('id_slideshow' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}
}
