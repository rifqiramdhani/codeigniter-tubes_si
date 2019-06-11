<!DOCTYPE html>
<html lang="en">
<head> 
  <!-- URL Theme Color untuk Chrome, Firefox OS, Opera dan Vivaldi -->
  <meta name="theme-color" content="#FDCA49" />
  <!-- URL Theme Color untuk Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#FDCA49" />
  <!-- URL Theme Color untuk iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#FDCA49" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <title>MORI &rsaquo; Library</title>
  <link rel="icon" href="<?php echo base_url('assets/img/book.png'); ?>" type="image/gif" sizes="16x16">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style-login.css'); ?>">

</head>
<body>
      <center>
        <div class="wrapper">
          <div class="imgHMIF">
            <center>
             <img src="<?php echo base_url('assets/img/moriram.png'); ?>" alt="MORI" class="img-responsive">
            </center>  
          </div>
          <form method="POST" action="<?= base_url('login/proses_login') ?>" class="form-signin">
            <h1 class="clr-white"> Maju Mundur Library </h1>
           
            <input type="email" class="form-control" name="email" placeholder="Email" required="">
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Login</button>
          </form>
          <center>
            <font color="#888" class="fontRegular">
              <p><br> All Rights Reserved &copy; <?= date('Y'); ?><br>
                Powered by Developer <a href="#" class="ColorIden"><b>MajuMundur 2018/2019</b></a>
              </p>
            </font>
          </center>
        </div>
      </center>
</body>
</html>

