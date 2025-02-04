<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
        $data['judul'] = ' Kontak | Koperasi ';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('kontak/index');
		$this->load->view('templates/footer');
	}
}
