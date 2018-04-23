<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();

	 //    $this->load->model('modelapp');
		//$this->load->library('pagination');
		$this->load->helper(array('url','text','form')); //load helper url
	}

	public function index()
	{
         $data=array(
            'title'=>'About - belajar ci3',
            'active_about'=>'active',
        );

        $this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('home');
		$this->load->view('partials/footer');
	}
}
