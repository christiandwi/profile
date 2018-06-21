<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_insert');
    }

	public function index()
	{
		$this->load->view('insert');
	}

	public function insert(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $born_date = $this->input->post('born_date');

        $data=array(
            'id_user' => null,
            'nama' => $nama,
            'email' => $email,
            'born_date' => $born_date
        );

        $pesan = $this->M_insert->insertuser($data);
        if($pesan['code']==0){
            echo 'tidak ada error dalam proses penyimpanan<br>';
            echo '<a href="'.base_url().'">kembali</a>';
        }elseif($pesan['code']==1071){
            echo 'max key length error 1071';
        }elseif($pesan['code']==1067){
            echo 'invalid default value error 1067';
        }
        else {
            echo 'kode error : ' . $pesan['code'] . '<br> pesan error : ' . $pesan['message'];
        }
    }

}
