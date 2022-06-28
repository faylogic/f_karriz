<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_product extends MY_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_product'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Product',
			'title' 		  => 'Product', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/product',$data);
	}

	function tambah_data()
	{	
		$data_kat_product = $this->M_crud->tampil_data('tb_kat_product')->result_array();
		$data_service 	  = $this->M_crud->tampil_data('tb_service')->result_array();
		$data = array(
			'title_bar' 	  => 'Form Input product',
			'title' 		  => 'Form Input product', //H4
			'stat' 			  => 'new',
			'id_product' 	  => '',
			'tanggal' 	  	  => '',
			'nm_product' 	  => '',
			'satuan' 		  => '',
			'harga_satuan'    => '',
			'harga_discount'  => '',
			'discount_percent'=> '',
			'deskripsi' 	  => '',
			'status_aktif' 	  => '',
			'data_kat_product'   => $data_kat_product,
			'data_service' 	  => $data_service,
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);

		$this->load->view('back/product_form',$data);
	}

	function tampil_data()
	{
		$list = $this->M_product->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
			$status_aktif = "<a class='btn btn-sm btn-info' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_product."'>PASIF</a>";
            if ($field->status_aktif == 1) 
            {
                $status_aktif = "<a class='btn btn-sm btn-success' href='javascript:void(0)' onclick='status_aktif(this)' data-id='".$field->id_product."'>AKTIF</a>";
            }

			$status_promo = "<a class='btn btn-sm btn-info' href='javascript:void(0)' onclick='status_promo(this)' data-id='".$field->id_product."'>PASIF</a>";
            if ($field->status_promo == 1) 
            {
                $status_promo = "<a class='btn btn-sm btn-success' href='javascript:void(0)' onclick='status_promo(this)' data-id='".$field->id_product."'>AKTIF</a>";
            }

            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="'.base_url().'konten/product/edit?id='.$field->id_product.'" id="edit" data-id="'.$field->id_product.'" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_product.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          

            $row[] = $field->nm_kat_product;
            $row[] = $field->nm_service;
            $row[] = $field->nm_product;
            $row[] = $field->harga_satuan;
            $row[] = $field->harga_discount;
            $row[] = $status_aktif;
            $row[] = $status_promo;
            $row[] = substr($field->deskripsi, 0,100);   
            $row[] = '<img class="img-thumbnail" style="width:100px;" src="'.base_url().'file/product/'.$field->file_gambar.'">';                  
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_product->count_all(),
            "recordsFiltered" => $this->M_product->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	function simpan_data()
	{

		$id 				= $this->input->post('id_product');
		$tanggal 			= $this->input->post('tanggal');
		$id_kat_product 	= $this->input->post('id_kat_product');			
		$id_service 		= $this->input->post('id_service');
		$nm_product 		= $this->input->post('nm_product');		
		$slug 				= url_title($nm_product,'dash',TRUE);
		$satuan 			= $this->input->post('satuan');
		$harga_satuan 		= $this->input->post('harga_satuan');
		$harga_discount 	= $this->input->post('harga_discount');
		$discount_percent 	= $this->input->post('discount_percent');
		$status_aktif 		= $this->input->post('id_service');
		$deskripsi 			= $this->input->post('deskripsi');
		$file 				= $this->input->post('file');
		$stat  				= $this->input->post('stat');
		$hasil 				= 1;
		$err 				= '';		


		if ($stat == 'new') 
		{
			$tanggal 	= date('Y-m-d');
			$id = $this->M_crud->id_num_month_year('tb_product','id_product','tanggal');
		}

		$set_data = array(
			'id_product'  		=> $id,
			'tanggal' 			=> $tanggal,
			'nm_product' 		=> $nm_product,
			'id_kat_product' 	=> $id_kat_product,
			'id_service' 		=> $id_service,
			'nm_product' 		=> $nm_product,
			'slug' 				=> $slug,
			'satuan' 			=> $satuan,
			'harga_satuan' 		=> $harga_satuan,
			'harga_discount' 	=> $harga_discount,
			'discount_percent' 	=> $discount_percent,
			'status_aktif' 		=> $status_aktif,
			'deskripsi' 		=> $deskripsi,
			'file_gambar'		=> $file,
 		);

 		if ($stat == 'new') 
 		{
 			$cek_data = $this->M_crud->tampil_data_where('tb_product',array('nm_product' => $nm_product))->result_array();
 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Nama Product Sudah Digunakan !';
 			}
 			else
 			{
 				if ($_FILES['file']['name'] != '') 
 				{
 				    $config = array(
 				        'upload_path'   => 'file/product',
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
 				        $set_data['file_gambar'] = $data_upload['file_name'];
 						$this->M_crud->ins_data('tb_product',$set_data); 				 				

 				    }
 				}

 			}
 		}
 		else
 		{
 			$ada = 0;
            $cek_data = $this->M_crud->tampil_data_where('tb_product',array('id_product' => $id))->result_array();

            if (count($cek_data) > 0) 
            {
            	$ada = 1;
            }
 			if ($_FILES['file']['name'] != '') 
 			{
 				if ($ada == 1) 
 				{
 					$file = $cek_data[0]['file_gambar'];
 					if ($file != NULL || $file != '') 
 					{
 					    unlink("./file/product/".$file."");                        
 					}
 				}
 			    $config = array(
 			        'upload_path'   => 'file/product',
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
 			        $set_data['file_gambar'] = $data_upload['file_name'];
 			    }
 			}
 			else
 			{
 				if ($ada == 1) 
 				{
 				    $set_data['file_gambar'] = $cek_data[0]['file_gambar'];
 				}
 			}

 			$cek_data = $this->M_crud->tampil_data_where('tb_product',array('nm_product' => $nm_product, 'id_product !=' => $id))->result_array(); 

 			if (count($cek_data) > 0) 
 			{
 				$hasil = 0;
 				$err 	= 'Judul product Sudah Digunakan !';
 			}	
 			else
 			{
 				$this->M_crud->upd_data('tb_product',$set_data,array('id_product' => $id));
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
 		$cek_data = $this->M_crud->tampil_data_where('tb_product',array('id_product' => $id))->result_array();
		$data_kat_product = $this->M_crud->tampil_data('tb_kat_product')->result_array(); 		
		$data_service 	  = $this->M_crud->tampil_data('tb_service')->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil 	= 0;
 			$err  	= 'Data Tidak Ditemukan !';
 		}

 		$data = array(
 			'title_bar' 	  => 'Form Edit product',
 			'title' 		  => 'Form Edit product', //H4
 			'stat' 			  => 'edit',
 			'cek_data' 		  => $cek_data,
 			'data_kat_product'   => $data_kat_product,
 			'data_service' 	  => $data_service,
  			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
 			'br_title_active' => $this->uri->segment('2'),//Breadcumb
 		);

 		$this->load->view('back/product_form',$data);
 	}

 	function delete_data()
 	{
 		$id = $this->input->post('id_product');
 		$cek_data = $this->M_crud->tampil_data_where('tb_product',array('id_product' => $id))->result_array();
 		$hasil = 1;
 		$err	 = '';

 		if (count($cek_data) == 0) 
 		{
 			$hasil = 0;
 			$err 	= 'Data Tidak Ditemukan !'; 
 		}
 		else
 		{
 			if ($cek_data[0]['file_gambar'] != '' || $cek_data[0]['file_gambar'] != NULL) 
 			{
 				unlink("./file/product/".$cek_data[0]['file_gambar']."");  
 			}
 			$this->M_crud->del_data('tb_product',array('id_product' => $id));
 		}

 		$data = array(
 			'hasil' => $hasil,
 			'err' => $err,
 		);

 		echo json_encode($data);
 	}

	function status_promo()
    {
        $id = $this->input->post('id_product');
        $cek_data = $this->M_crud->tampil_data_where('v_product',array('id_product' => $id))->result_array();

        $hasil = 1;
        $err    = '';
        if (count($cek_data) > 0) 
        {
            foreach ($cek_data as $c) 
            {
                $status_promo = 1;
                if ($c['status_promo'] == 1) 
                {
                    $status_promo = 0;
                }

                $set_data = array(
                    'status_promo' => $status_promo,
                );

                $this->M_crud->upd_data('tb_product',$set_data,array('id_product' => $id));
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
	
	function status_aktif()
    {
        $id = $this->input->post('id_product');
        $cek_data = $this->M_crud->tampil_data_where('v_product',array('id_product' => $id))->result_array();

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

                $this->M_crud->upd_data('tb_product',$set_data,array('id_product' => $id));
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