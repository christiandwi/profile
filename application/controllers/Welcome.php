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
	    $user = $this->input->post('user');
	    $gender = $this->input->post('gender');
	    $usia = $this->input->post('usia');

	    if($user == null || $gender == null || $usia == null){
            $errornya = 422;
            show_error('Not null exception',$errornya,'Error '.$errornya);

        }else {
            if ($this->M_insert->cekuser($user) > 0) {
                $errornya = 400;
                show_error('Duplicate key entry',$errornya,'Error '.$errornya);
            } else {
                $profile = array(
                    'id_profile' => null,
                    'gender' => $gender,
                    'usia' => $usia
                );

                $idprofil = $this->M_insert->insertprofile($profile);

                $userinsert = array(
                    'id_user' => $user,
                    'id_profile' => $idprofil
                );

                $this->M_insert->insertuser($userinsert);
            }
        }

        redirect('/');

    }

}
