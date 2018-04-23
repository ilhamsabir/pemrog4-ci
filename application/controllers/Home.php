<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


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
