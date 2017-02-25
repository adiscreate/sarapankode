<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Aplikasi #{SarapanKode}">
	<meta name="author" content="Adi Setiawan">
	<link rel="icon" href="<?php echo base_url();?>assets/images/sarapan.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/lumen.bootstrap.min.css">
	<title><?php echo $title; ?></title>

	<style type="text/css">
		.navbar {
			border-radius: 0px;
		}
	</style>
</head>
<body>
<div class="navbar navbar-default">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url(); ?>index.php">#{SarapanKode} <span class="badge">beta</span></a>
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url(); ?>index.php/home/tambah">Tambah Data</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/home/cetak">Cetak Data</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/home/stats">Statistika</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/home/ekspor">Ekspor ke CSV</a></li>
		</ul>
	</div>
	
</div>

<div class="container">