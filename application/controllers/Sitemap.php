<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitemap extends CI_Controller {
 public function index(){
     $this->load->helper('url');
     $data = array(
     	'kegiatan' => $this->M_crud->tampil_data('tb_kegiatan')->result_array(),
     	'blog' 	   => $this->M_crud->tampil_data('tb_blog')->result_array(),
     	'product'  => $this->M_crud->tampil_data('tb_product')->result_array(),
     );
     // $data['wi_kegiatan'] = $this->Model_sitemap->wi_kegiatan();
     // $data['wi_blog'] = $this->Model_sitemap->wi_blog();
     $this->load->view('sitemap',$data);
 }
}