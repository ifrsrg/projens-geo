<!DOCTYPE html>
<html>
<head>
	<title>Projetos - NTL</title>

	<link rel="shortcut icon" href="img/favicon.ico" />
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="menu">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Núcleo de Tecnologias Livres</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"> <a href="index.html">Home</a></li>
				<li class="active"> <a href="novo.html">Novo trabalho</a></li>
			</ul>
		</div>
	</div>
	<img src="img/ntl.png" style="width: 448px; height:292px; margin-left: 440px;"> </img>

	<div class="container" style="left: 400px;">
		<ul  class="nav nav-pills">
			<li class="active">
				<a href="#1a" data-toggle="tab"> <h4> Ensino </h4> </a>
			</li>
			<li>
				<a href="#2a" data-toggle="tab"> <h4> Extensão </h4> </a>
			</li>
			<li>
				<a href="#3a" data-toggle="tab"> <h4> Pesquisa </h4> </a>
			</li>
		</ul>

		<div class="tab-content clearfix">
			<div class="tab-pane active" id="1a">
				<br />
				<a name="ensino" value="ensino">
					<?php $area = 'ensino';
					include("projetos_lista.php"); ?> 
				</a>
			</div>
			<div class="tab-pane" id="2a">
				<br />
				<a name="extensao" value="extensao">
					<?php $area = 'extensao';
					include("projetos_lista.php"); ?>
				</a>
			</div>
			<div class="tab-pane" id="3a">
				<br />
				<a name="pesquisa" value="pesquisa">
					<?php $area = 'pesquisa';
					include("projetos_lista.php"); ?>
				</a>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>