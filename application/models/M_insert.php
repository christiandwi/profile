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
    }

    public function insertprofile($data){
        $this->db->insert('profile',$data);
        return $this->db->insert_id();
    }

    public function cekuser($user){
        $this->db->from('user');
        $this->db->where('id_user',$user);
        return $this->db->get()->num_rows();
    }

}