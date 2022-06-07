
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_home extends CI_Controller 
{	
	function __construct()
	{
		parent::__construct();		
	}

	public function buat_captcha(){
        $vals = array(
            'img_path' 		=> 'captcha/',
            'img_url'	 	=> base_url().'captcha/',
            'font_path' 	=> FCPATH . 'captcha/font/texb.ttf',
            'word_length'   => 4,
            'img_width' 	=> 190,
            'img_height' 	=> 60,
            'font_size' 	=> 24,
            'expiration' 	=> 7200
        );
        $cap = create_captcha($vals);
        return $cap;
    }

	public function index()
	{


		$this->M_crud->_limit(12);		
		$this->M_crud->_order_by('tgl_kegiatan','desc');
		$kegiatan 	= $this->M_crud->tampil_data('v_kegiatan')->result_array();

		$this->M_crud->_order_by('tgl_testimoni','desc');
		$testimoni 	= $this->M_crud->tampil_data('tb_testimoni')->result_array();

		$this->M_crud->_limit(3);
		$this->M_crud->_order_by('tgl_blog','desc');
		$blog 		= $this->M_crud->tampil_data('tb_blog')->result_array();
		
		$this->M_crud->_limit(8);
		$this->M_crud->_order_by('id_product','desc');
		$product 	= $this->M_crud->tampil_data('v_product')->result_array();

		$contact 	= $this->M_crud->tampil_data('tb_contact')->result_array();

		$this->M_crud->_order_by('id_client','desc');
		$client 	= $this->M_crud->tampil_data('tb_client')->result_array();

		$this->M_crud->_limit(9);		
		$this->M_crud->_order_by('id_gallery','desc');		
		$gallery 	= $this->M_crud->tampil_data('v_gallery')->result_array();


		// CAPTCHA
		$cap = $this->buat_captcha();
		$this->session->set_userdata('kode_captcha', $cap['word']);


		$data = array(
			'title_bar' => 'Home',
			'menu' 		=> '',
			'layanan' 	=> $this->M_crud->tampil_data('tb_service')->result_array(),
			'kegiatan' 	=> $kegiatan,
			'testimoni' => $testimoni,
			'blog' 		=> $blog,
			'product' 	=> $product,
			'contact' 	=> $contact,
			'client' 	=> $client,
			'gallery' 	=> $gallery,
			'cap_img' 	=> $cap['image'],
			'deskripsi' => '',

		);
		$this->load->view('front/home',$data);
	}
}
