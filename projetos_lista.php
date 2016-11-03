<?php
	
	$host = "localhost";
	$db   = "ntl_web";
	$user = "root";
	$pass = "";

	$link = new mysqli($host, $user, $pass, $db);
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());  

	$query = $link->query("SELECT titulo, area 
						   FROM uploads
						   WHERE area = '$area'");
	while ($r = $query->fetch_assoc()) {
		echo "<p>${r['titulo']}</p>";
	}
?>