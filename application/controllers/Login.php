<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

    function index(){
        $this->load->view('auth/login/view');
    }
    
    function proses_login(){
        echo "ini halaman login";
    }
} 

?>