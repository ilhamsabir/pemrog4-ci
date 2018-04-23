<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

      function __construct(){
       parent::__construct();

	   if($this->session->userdata('login_status') != TRUE ) {
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('/');
        };

       $this->load->model('model_app');


   }

	public function index()
	{
         $data = array(
            'title' => 'Crud - belajar ci3',
            'active_crud' => 'active',
        );

		$this->load->view('login');

	}

	function cek_login() {
		//Field validation succeeded.  Validate against database
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');
		 //query the database
		 $result = $this->m_app->login($username, $password);
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				//create the session
				$sess_array = array(
					'ID' => $row->id,
					'USERNAME' => $row->username,
					'PASS' =>$row->password,
					'login_status'=>true,
				);
				//set session with value from database
				$this->session->set_userdata($sess_array);
				redirect('/','refresh');
			}
			return TRUE;
		} else {
			//if form validate false
			redirect('login','refresh');
			return FALSE;
		}
	}


}
