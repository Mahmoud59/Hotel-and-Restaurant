<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Holiday Crown | Best hotel in Dubai</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?= base_url()?>assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="<?= base_url()?>assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="<?= base_url()?>images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="<?= base_url()?>assets/style.css">

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url()?>Project"><img src="<?= base_url()?>images/logo.png"  alt="holiday crown"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="<?= base_url()?>Project/home">Home </a></li>
        <li><a href="<?= base_url()?>Project/rooms">Rooms & Tariff</a></li>        
        <li><a href="<?= base_url()?>Project/services">Services</a></li>
        <li><a href="<?= base_url()?>Project/contact">Contact</a></li>
        <li><a href="<?= base_url()?>Project/editinfo/<?php echo $this->session->userdata('data')['user_id'];?>">Edit</a></li>
        <li style="color: black;"><a href="<?= base_url()?>Project/profile/<?php echo $this->session->userdata('data')['user_id'];?>"><?php echo $this->session->userdata('data')['username'];?></a></li>        
        <li><a href="<?= base_url()?>Login/logout">Logout</a></li><br>
         
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->

