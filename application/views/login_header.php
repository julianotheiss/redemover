<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>">
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src='<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>'></script>
	<title>Rede Mover</title>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rede Mover</a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/home') ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Home Page<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('index.php/acervo') ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Acervo de Publicações</a></li>
        <li><a href="<?php echo base_url('index.php/autores') ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Índice de Autores</a></li>
        <li><a href="<?php echo base_url('index.php/sobre') ?>"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Sobre a Rede</a></li>
        <li><a href="<?php echo base_url('index.php/contato') ?>"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contato</a></li>
        
      </ul>
	  <ul class="nav navbar-nav navbar-right">
		<!--<li><a href="<?php //echo base_url('index.php/admin') ?>"><b><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</b></a></li>
		<li><a href="<?php //echo base_url('index.php/admin/logout') ?>"><b><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</b></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul> -->
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</head>