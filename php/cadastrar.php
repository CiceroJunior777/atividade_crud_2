<?php

$nome_aluno = $_POST['nome'];
$disc = $_POST['disciplina'];
$nota1 = $_POST['n1'];
$nota2 = $_POST['n2'];

//$servername = "sql111.epizy.com";
//$username = "epiz_28780994";
//$password = "iu5ffU7PrheTg";
//$dbname = "epiz_28780994_bancoalunos";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO alunos(aluno, disciplina, n1, n2)
  VALUES ('$nome_aluno', '$disc', '$nota1', '$nota2')";

  $conn->exec($sql);
  header("location: visualizar.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>