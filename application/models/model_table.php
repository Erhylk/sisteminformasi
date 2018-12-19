<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_table extends CI_model {

	public function getdata($key)

	{
		$this->db->where('id_lagu', $key);
		$hasil = $this->db->get('lagu');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_lagu', $key);
		$this->db->update('lagu', $data);
	}

	public function getinsert($data)
	{
		$this->db->insert('lagu',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id_lagu', $key);
		$this->db->delete('lagu');
	}
	
	
}
  