<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Home extends CI_Controller{

	public function index(){
		$this->load->view('template');
	}
}