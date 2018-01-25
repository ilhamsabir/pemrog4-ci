<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
         $data=array(
             'title'=>'About - belajar ci3',
            'active_about'=>'active',
        );
        
		$this->load->view('home');
        // $this->load->view('element/header',$data);
		// $this->load->view('v_about');
        // $this->load->view('element/footer');
	}
}
