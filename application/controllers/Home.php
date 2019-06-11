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
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ini halaman ku</title>
</head>
<body>
	<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita explicabo a animi eveniet nemo dolorum saepe maiores voluptate cupiditate molestias, repudiandae sed maxime amet tenetur aspernatur fugit ex repellendus id?</h1>
</body>
</html>