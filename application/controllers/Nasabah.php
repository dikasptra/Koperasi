<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Nasabah_model');
		$this->load->library('form_validation');
	}

	// menampikan data
	public function index()
	{
        $data['judul'] = ' Nasabah | Koperasi ';
		$data['nasabah'] = $this->Nasabah_model->getAllNasabah();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('nasabah/index', $data);
		$this->load->view('templates/footer');
	}

	// fungsi untuk menambah data
	public function tambah(){
		$data['judul'] = 'Tambah | Koperasi';

		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('nama_nasabah', 'Nama_nasabah', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No_hp', 'required');
		$this->form_validation->set_rules('tgl_simpan', 'Tgl_simpan', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
	
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('nasabah/tambah');
		$this->load->view('templates/footer', $data);
	} else {
		$this->Nasabah_model->addNasabah();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('nasabah');
	}
}

// membuat fungsi edit data
public function edit($id)
{
	$data['judul'] = 'Edit | Koperasi';
	$data['nasabah'] = $this->Nasabah_model->getNasabahById($id);

		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('nama_nasabah', 'Nama_nasabah', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No_hp', 'required');
		$this->form_validation->set_rules('tgl_simpan', 'Tgl_simpan', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('nasabah/edit');
			$this->load->view('templates/footer', $data);
		} else {
			$this->Nasabah_model->updatenasabah($id);
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('nasabah');
		}
}

// fungsi hapus 
public function hapus($id)
{
	$this->Nasabah_model->delNasabah($id);
	$this->session->set_flashdata('flash', 'Dihapus');
	redirect('nasabah');
}


	// end class
	// jangan di hapus
}
