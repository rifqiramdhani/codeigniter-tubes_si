  <!-- load header -->
  <?php $this->load->view('config/header'); ?>

  <body class="hold-transition skin-blue sidebar-mini">
  	<div class="wrapper">
      <!-- load navbar -->
  		<?php $this->load->view('config/navbar'); ?>
  			<!-- Left side column. contains the logo and sidebar -->
        <!-- load sidebar -->
  			<?php $this->load->view('config/sidebar') ?>
  			<!-- Content Wrapper. Contains page content -->
  			<div class="content-wrapper">
  				<!-- Content Header (Page header) -->
  				<section class="content-header">
  					<h1>
  						Dashboard
  					</h1>
  				</section>

  				<!-- Main content -->
  				<section class="content">
  					<div class="row">
  						<div class="col-md-12 col-xs-12 col-md-12">
  							<div class="alert alert-info alert-dismissable text-center">
  								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  								<strong>Hai!</strong> ADMIN.
  							</div>
  						</div>
  					</div>
  					<!-- /.row -->
	  			</section>
  				<!-- /.content -->
  			</div>
  			<!-- /.content-wrapper -->
  			<?php $this->load->view('config/footer') ?>
