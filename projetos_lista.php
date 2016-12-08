<?php
	
	$host = "localhost";
	$db   = "ntl_web";
	$user = "root";
	$pass = "";

	$link = new mysqli($host, $user, $pass, $db);
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());  

	$query = $link->query("SELECT id, titulo, area 
						   FROM uploads
						   WHERE area = '$area'");
	while ($r = $query->fetch_assoc()) {
		$arquivo = "uploads/${r['id']}";
		
		$explode = explode('.', $arquivo);
  		$end = end($explode);
  		$extensao = strtolower($end);

  		if ($extensao == 'pdf') {
		echo "<a href=\"$arquivo\" target=\"_blank\"> 
			  	 <p> ${r['titulo']} </p> 
			  </a>";
		} else {
		echo "<p> ${r['titulo']} - 
				<a href=\"$arquivo\"> 
					Baixar	  
		  	  	</a>
		  	  </p>";
		}
	}