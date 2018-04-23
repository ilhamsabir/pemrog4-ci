<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploaddocument extends CI_Controller {

	function __construct(){
	   parent::__construct();

	//    $this->load->model('modelapp');
	   //$this->load->library('pagination');
	   $this->load->helper(array('url','text','form')); //load helper url
   }

	public function index()
	{
		 $data=array(
			'title'=>'Crud - belajar ci3',
			'active_crud'=>'active',
		);

		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('upload-dokumen');
		$this->load->view('partials/footer');
	}

	public function uploadSrtPermohonan()
	{
		$this->load->library('upload');

		$nmfile = "srt-permohonan_".time();
		$config['upload_path'] = './fildedata/srt-permohonan/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	  	$config['max_size'] = '2048';
	  	$config['max_width']  = '1288';
	  	$config['max_height']  = '768';
	  	$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if($_FILES['file_permohonan']['name'])
        {
            if ($this->upload->do_upload('file_permohonan'))
            {

                $gbr = $this->upload->data();
                $data = array(
                  'foto' =>$gbr['file_name'],

                );
                // $this->m_app->insertData('tbl_fileorg',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                // $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Dokumen Berhasil Di Upload</div></div>");
				// redirect('publikdokumenadart'); //jika berhasil maka akan ditampilkan view vupload
				$data = array(
					'data' => $thisFile['file_name'],
					'error' => 0,
					'message' => 'success'
				);

            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                // $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Dokumen Gagal Upload , Coba Lagi !</div></div>");
				// redirect('publikdokumenadart'); //jika gagal maka akan ditampilkan form upload
				$data = array(
					'data' => [],
					'error' => 1,
					'message' => 'error'
				);
            }
        } else {
			$data = array(
				'data' => [],
				'error' => 1,
				'message' => 'error You dont have image file'.$_FILES['filePermohonan']['name']
			);
		}

		return $this->output
			->set_content_type('application/json')
			->set_status_header(500)
			->set_output(json_encode($data));
	}



}
