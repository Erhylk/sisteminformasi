<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

    public function getlogin($u,$p)
	{
        
        $this->db->where('username',$u);
        $this->db->where('password',$p);
        $query = $this->db->get('admins');
        if($query->num_rows()>0){
            foreach ($query->result() as $row){
                $sess = array('username'           =>$row->username,
                              'nama'       =>$row->nama);
                $this->session->set_userdata($sess); 
                redirect('beranda');
                }
        }
        else
    {
        $this->session->set_flashdata('info','maaf salah');
        redirect('login');
    }
    }


}
