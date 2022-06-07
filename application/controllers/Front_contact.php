<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_contact extends CI_Controller 
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
            'font_size' 	=> 16,
            'expiration' 	=> 7200
        );
        $cap = create_captcha($vals);
        return $cap;
    }

	public function index()
	{
		// CAPTCHA
		$cap = $this->buat_captcha();
		$this->session->set_userdata('kode_captcha', $cap['word']);
	

		$contact 				= $this->M_crud->tampil_data('tb_contact')->result_array();		
		$data = array(
			'title_bar' => 'Contact',
			'deskripsi' => '',
			'cap_img' 			=> $cap['image'],
			'contact'	=> $contact,
			'menu' 		=> '',
		);
		$this->load->view('front/contact',$data);
	}


	function contact_send()
	{
		$kode_captcha = $this->input->post('kode_captcha',TRUE);
		$my_captcha   = $this->session->userdata('kode_captcha');

		if ($kode_captcha == $my_captcha) 
		{
			$nama = $this->input->post('nama_lengkap');
			$email = $this->input->post('email');
			$message = $this->input->post('message');

			$data = array(
				'id_inbox' => $this->M_crud->id_num_year('tb_inbox','id_inbox','tgl'),
				'email'    => $email,
				'nama' 	   => $nama,
				'message'  => $message,
				'tgl'      => date('Y-m-d'),
			);

			$this->M_crud->ins_data('tb_inbox',$data);

			$this->session->set_flashdata('result', '<div class="alert alert-info alert-dismissable">
			                                <i class="fa fa-info"></i>
			                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                                <b>Berhasil ! </b> Semoga Kita Dapat Bekerjasama
			                            </div>');
			if ($this->uri->segment('1') != 'kontak') 
			{
				redirect(base_url('kontak'));				
			}
			else
			{
				redirect(base_url());
			}
 		}
 		else
 		{
 			$this->session->set_flashdata('result', '<div class="alert alert-danger alert-dismissable">
 			                                <i class="fa fa-info"></i>
 			                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 			                                <b>Gagal ! </b> Captcha Tidak Sesuai
 			                            </div>');
 			if ($this->uri->segment('1') != 'kontak') 
 			{
 				redirect(base_url('kontak'));				
 			}
 			else
 			{
 				redirect(base_url());
 			}
 		}
	}
}
