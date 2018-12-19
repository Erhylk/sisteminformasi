<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table  extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_table');
		// $isi['content'] = 'view_table';
		// $isi['judul']	= 'master';
		// $isi['sub_judul'] = 'admins'; 
		$isi['data'] = $this->db->get('lagu');
		$this->load->view('view_table', $isi);

	}

	public function tambah()
	{
		
		
		$isi['content'] = 'view_tambahtable';
		// $isi['judul']	= 'master';
		// $isi['sub_judul'] = 'admins'; 
		$isi['id_lagu']	= '';
		$isi['penyanyi']	= '';
		$isi['judul']	= '';
		$isi['genre'] = '';
		$this->load->view('view_tambahtable' , $isi);
 
	}

	public function edit()
	{
		
		$isi['content'] = 'view_tambahtable';
		$isi['judul']	= 'master';
		$isi['sub_judul'] = 'edit lagu'; 

		$key = $this->uri->segment(3);
		$this->db->where('id_lagu', $key);
		$query = $this->db->get('lagu');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_lagu']	= $row->id_lagu;
				$isi['penyanyi']	= $row->penyanyi;
				$isi['judul']	= $row->judul;
				$isi['genre']   = $row->genre; 
			}

		}
		else
		{
				$isi['id_lagu']	= '';
				$isi['penyanyi']	= '';
				$isi['judul']	= '';
				$isi['genre']   = ''; 
		}
		$this->load->view('view_table', $isi );
 		

	}

	public function simpan()
	{
		
		
		$key					= $this->input->post('id');
		$data['id_lagu']		= $this->input->post('id_lagu');
		$data['penyanyi']		= $this->input->post('penyanyi');
		$data['judul']		    = $this->input->post('judul');
		$data['genre']          = $this->input->post('genre');

		$this->load->model('model_table');
		$query = $this->model_table->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_table->getupdate($key,$data);
			$this->session->set_flashdata('info','data sukses di update');
		}
		else
		{
			$this->model_table->getinsert($data);
			$this->session->set_flashdata('info','data sukses di simpan');
		}
		redirect('table/tambah');
	}

	public function delete()
	{
		
		$this->load->model('model_table');

		$key = $this->uri->segment(3);
		$this->db->where('id_lagu', $key);
		$query = $this->db->get('lagu'); 
		if($query->num_rows()>0)
		{
			$this->model_table->getdelete($key);
		} 
		redirect('table');
	}
	
}
