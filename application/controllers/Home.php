<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * summary
 */
class Home extends CI_Controller
{

	public function index(){ 
		$this->load->view('config/header');
		$this->load->view('config/navbar');
		$this->load->view('config/sidebar');
		$this->load->view('page/home/view');
		$this->load->view('config/footer');
	}
}
