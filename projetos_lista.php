<?php
	// definições de host, database, usuário e senha
	$host = "localhost";
  	$db   = "ntl_web";
  	$user = "root";
  	$pass = "";

	$link = new mysqli($host, $user, $pass, $db);// or trigger_error(mysql_error(),E_USER_ERROR);
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());  

	$query = $link->query("SELECT * FROM uploads");
	while ($r = $q->fetch_assoc()) {
    	print_r($r);
	}
?>