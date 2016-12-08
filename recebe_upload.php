<?php
  // definições de host, database, usuário e senha
  $host = "localhost";
  $db   = "ntl_web";
  $user = "root";
  $pass = "";

	$link = new mysqli($host, $user, $pass, $db);
  if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());  

  // Pasta onde o arquivo vai ser salvo
  $dir = "uploads\\";
  
  // Mantém o nome original do arquivo
  $nome_final = $_FILES['userfile']['name'];

	// Extensões permitidas
  $extensoes = array('doc', 'odt', 'pdf', 'docx');
  
 	// Array com os tipos de erros de upload do PHP
  $erros[0] = ' Não houve erro';
  $erros[1] = ' O arquivo no upload é maior do que o limite do PHP';
  $erros[2] = ' O arquivo ultrapassa o limite de tamanho especifiado no HTML';
  $erros[3] = ' O upload do arquivo foi feito parcialmente';
  $erros[4] = ' Não foi feito o upload do arquivo';
  
  // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
  if ($_FILES['userfile']['error'] != 0) {
    die("Não foi possível fazer o upload, erro:". $erros[$_FILES['userfile']['error']]);
    exit;
  }
  
  echo var_dump($_FILES['userfile']);
  $nome = $_FILES['userfile']['name'];
  $explode = explode('.', $nome);
  $end = end($explode);
  $extensao = strtolower($end);

  // Se chegar aqui, não houve erro com o upload e o PHP pode continuar
  // Faz a verificação da extensão do arquivo
  if (array_search($extensao, $extensoes) === false) {
    die("Por favor, envie arquivos com as seguintes extensões: doc, odt ou pdf");
  }
  
  $id = uniqid() . ".". $extensao;

  // Verifica se é possível mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $dir. $id)) {
    $data = date("Y-m-d");
    $autor = $_POST['nome'];
    $titulo = $nome_final;
    $comentario = $_POST['comentario'];
    $area = $_POST['area'];
  
    $query = "INSERT INTO uploads (id, data, autor, titulo, comentario, area) 
    VALUES ('" . $id . "','" . $data . "','" . $autor . "','" . $titulo . "','" . $comentario . "','" . $area . "')";

    $stmt = $link->prepare($query);
    $stmt->execute();
    header('Location: projetos.php');
    exit;
  } else {
    echo "Não foi possível enviar o arquivo, tente novamente";
  }
?>