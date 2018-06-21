<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/20/18
 * Time: 7:43 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class M_insert extends CI_Model{

    public function insertuser($data){
        $this->db->insert('user',$data);
        $error = $this->db->error();
        if(!empty($error)){
            return $error;
        }else {
            return 'Tidak ada error';
        }
    }

}