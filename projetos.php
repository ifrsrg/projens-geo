<!DOCTYPE html>
<html>
<head>
	<title>Projetos - NTL</title>
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
	<div id="ensino"> 
		<h4> Ensino </h4>
		<a href="" name="ensino" value="ensino"
			<?php $area = 'ensino';
			include("projetos_lista.php"); ?>>	 
		</a>
	</div>
	<div id="extensao">
		<h4> Extensão </h4>
		<a href="" name="extensao" value="extensao"
			<?php $area = 'extensao';
			include("projetos_lista.php"); ?> >
		</a>
	</div>
	<div id="pesquisa">
		<h4> Pesquisa </h4>
		<a href="" name="pesquisa" value="pesquisa"
			<?php $area = 'pesquisa';
			include("projetos_lista.php"); ?> >
		</a>
	</div>
</body>
</html>