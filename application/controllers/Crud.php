<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

      function __construct(){
       parent::__construct();

    //    if($this->session->userdata('login_status') != TRUE ) {
    //         $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //         redirect('/');
    //     };

       $this->load->model('model_app');

       $this->load->library('pagination');
       $this->load->helper(array('url','text', 'form')); //load helper url
   }

	public function index()
	{
         $data = array(
            'title' => 'Crud - belajar ci3',
            'active_crud' => 'active',
            'data_buku' => $this->model_app->getAllData('tabel_buku'),
            // $this->model_app->getAllData('tabel_buku'),
        );

        $this->load->view('partials/header', $data);
		$this->load->view('partials/navbar');
		$this->load->view('crud');
		$this->load->view('partials/footer');
	}

    public function prosestambah(){

        $data = array (
            'judul' => $this->input->post('judul'),
            'kd_buku' => $this->input->post('kd_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'kategori' => $this->input->post('kategori'),
        );

         //akses model untuk menyimpan ke database
        $this->model_app->insertData('tabel_buku', $data);

        if($data >= 1) {
            $response = array(
                'data' => $data,
                'error' => 0,
                'message' => 'Success'
            );
        }else{
            $response = array(
                'data' => [],
                'error' => 1,
                'message' => 'error'
            );
        }

        return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($response));

    }


    public function prosesedit(){

        $id['kdinfo'] = $this->input->post('kdinfo');
        $data = array(

          'judulinfo'=>$this->input->post('judulinfo'),
          'isiinfo'=>$this->input->post('isiinfo'),
          'tglinfo'=>$this->input->post('tglinfo'),

        );

        $this->modelapp->updateData('tblinfo',$data,$id); //akses model untuk menyimpan ke database

        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Diupdate </div></div>");
                redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Update coba lagi !</div></div>");
                redirect('crud'); //jika gagal maka akan ditampilkan form upload
            }
    }

    public function delete(){

        // $id['kdinfo'] = $this->uri->segment(3);
        $id['kd_buku'] = $this->uri->segment(3);
        $this->model_app->deleteData('tabel_buku', $id);

        $response = array(
            'data' => $id,
            'error' => 0,
            'message' => 'Success'
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($response));

    }

}
