<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_database', 'proses');
	}

	public function index()
	{
		$data['buku'] = $this->proses->getData('buku');
		$this->load->view('config/header');
		$this->load->view('config/navbar');
		$this->load->view('config/sidebar');
		$this->load->view('page/buku/view',$data);
		$this->load->view('config/footer');
	}
}

?>


