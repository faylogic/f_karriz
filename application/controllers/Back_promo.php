<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_promo extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_promo'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Promo',
			'title' 		  => 'Promo', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/promo',$data);
	}

    function tambah_data()
	{	
		$data = array(
		    'title_bar' 	  => 'Form Input Promo',
			'title' 		  => 'Form Input Promo', //H4
			'stat' 			  => 'new',
			'id_promo' 		  => '',
			'link' 	  => '',
			'lokasi_banner'   => '',
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/promo_form',$data);
	}

    function tampil_data()
	{
		$list = $this->M_promo->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $status_aktif = "<a class='btn btn-sm btn-info' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_promo."'>PASIF</a>";
            if ($field->status_aktif == 1) 
            {
                $status_aktif = "<a class='btn btn-sm btn-success' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_promo."'>AKTIF</a>";
            }

            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/promo/edit?id='.$field->id_promo.'" id="edit" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_promo.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->link_promo;
            $row[] = $field->lokasi_banner;
            $row[] = $status_aktif;  
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/promo/'.$field->file_promo.'">';                  
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_promo->count_all(),
            "recordsFiltered" => $this->M_promo->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

    function simpan_data()
	{

		$id = $this->input->post('id_promo');
		$link = $this->input->post('link');		
		$file = $this->input->post('file');
        $lokasi_banner = $this->input->post('lokasi_banner');
		$stat  = $this->input->post('stat');
		$hasil 	=1;
		$err 	= '';		

		$set_data = array(
			'link_promo' => $link,			
			'file_promo' => $file,
            'lokasi_banner' => $lokasi_banner,
            'status_aktif' => 1,
 		);

        if ($stat == 'edit') 
		{
            $set_data['id_promo'] = $id;
		}

 		if ($stat == 'new') 
 		{
            if ($_FILES['file']['name'] != '') 
            {
                $config = array(
                    'upload_path'   => 'file/promo',
                    'allowed_types' => 'gif|jpg|png|jpeg|bmp',
                    'remove_space'  => true,
                    'overwrite'     => false,
                    'encrypt_name'  => false,
                    // 'file_name'     => $id.'-image',                  
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
                    $set_data['file_promo'] = $data_upload['file_name'];
                    $this->M_crud->ins_data('tb_promo',$set_data); 

                }
            }

 		}
 		else
 		{
            $boleh = 1;
            $cek_data = $this->M_crud->tampil_data_where('tb_promo',array('id_promo' => $id))->result_array();

            if (count($cek_data) > 0) 
            {
                if ($_FILES['file']['name'] != '') 
                {
                    $file = $cek_data[0]['file_promo'];
                    if ($file != NULL || $file != '') 
                    {
                        unlink("./file/promo/".$file."");                        
                    }
                   
                    $config = array(
                        'upload_path'   => 'file/promo',
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
                        $set_data['file_promo'] = $data_upload['file_name'];
                    }
                }
                else
                {
                    $set_data['file_promo'] = $cek_data[0]['file_promo'];
                    
                }

                if ($boleh == 1) 
                {
                    $this->M_crud->upd_data('tb_promo',$set_data,array('id_promo' => $id));
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_promo',array('id_promo' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit Promo',
 			'title' 		  => 'Form Edit Promo', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/promo_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_promo');
 		$cek_data = $this->M_crud->tampil_data_where('tb_promo',array('id_promo' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil = 0;
 			$err 	= 'Data Tidak Ditemukan !'; 
 		}
 		else
 		{
 			if ($cek_data[0]['file_promo'] != '' || $cek_data[0]['file_promo'] != NULL) 
 			{
 				unlink("./file/promo/".$cek_data[0]['file_promo']."");  
 			}
 			$this->M_crud->del_data('tb_promo',array('id_promo' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}

    function status_aktif()
    {
        $id = $this->input->post('id_promo');
        $cek_data = $this->M_crud->tampil_data_where('tb_promo',array('id_promo' => $id))->result_array();

        $hasil = 1;
        $err    = '';
        if (count($cek_data) > 0) 
        {
            foreach ($cek_data as $c) 
            {
                $status_aktif = 1;
                if ($c['status_aktif'] == 1) 
                {
                    $status_aktif = 0;
                }

                $set_data = array(
                    'status_aktif' => $status_aktif,
                );

                $this->M_crud->upd_data('tb_promo',$set_data,array('id_promo' => $id));
            }
        }
        else
        {
            $hasil  = 0;
            $err    = 'Data Tidak Ditemukan !';
        }

        $data = array(
            'hasil' => $hasil,
            'err'   => $err,
        );

        echo json_encode($data);
    }
}