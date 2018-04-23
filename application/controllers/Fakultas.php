<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {

	function __construct(){
		parent::__construct();

		// $this->load->model('modelapp');
		//$this->load->library('pagination');
		$this->load->helper(array('url','text','form')); //load helper url
	}

	public function index()
	{
		$data=array(
			'title'=>'Crud - belajar ci3',
			'active_crud'=>'active',
			// 'ambil_info'=>$this->modelapp->TampilData('tblinfo'),
		);


		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('fakultas');
		$this->load->view('partials/footer');
	}


	public function getListJenjang() {
		$data = array(
			'id' => '1',
			'name' => 'S1'
		);

		return $this->output
				->set_content_type('application/json')
				->set_status_header(500)
				->set_output(json_encode($data));
	}
}
