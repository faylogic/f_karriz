<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back_inbox extends MY_Controller 
{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model(array('M_inbox'));
	}

	public function index()
	{
		$data = array(
			'title_bar' 	  => 'Data Inbox',
			'title' 		  => 'Inbox', //H4
			'br_title' 		  => $this->uri->segment('1'),//Breadcumb
			'br_title_active' => $this->uri->segment('2'),//Breadcumb
		);
		$this->load->view('back/inbox',$data);
	}

	function tampil_data()
	{
		$list = $this->M_inbox->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;  
            $row[] = '<a href="javascript:void(0)" onclick="delete_data(this)" id="delete" data-id="'.$field->id_inbox.'" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></a>
            ';          
            $row[] = $field->tgl;                     
            $row[] = $field->nama;
            $row[] = $field->email;
            $row[] = $field->message;                     
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_inbox->count_all(),
            "recordsFiltered" => $this->M_inbox->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}
	

	
	function delete_data()
	{
		$id = $this->input->post('id_inbox');
		$hasil = 1;
		$err = '';
		$cek_data = $this->M_crud->tampil_data_where('tb_inbox',array('id_inbox' => $id))->result_array();
		
		if (count($cek_data) == 0) 
		{
			$hasil = 0;
			$err 	= 'Data Tidak Ditemukan !';
		}
		else
		{
			$this->M_crud->del_data('tb_inbox',array('id_inbox' => $id));
		}
		
		$data = array(
			'hasil' => $hasil,
			'err' 	=> $err,
		);

		echo json_encode($data);	
	}
	
}