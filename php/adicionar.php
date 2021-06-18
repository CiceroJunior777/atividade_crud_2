<?php

$nome = $_POST['nome'];
$pontos = $_POST['p'];
$abates = $_POST['a'];

//$servername = "sql111.epizy.com";
//$username = "epiz_28780994";
//$password = "iu5ffU7PrheTg";
//$dbname = "epiz_28780994_bancoalunos";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classificacao";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO equipes(equipes, pontos, abates)
  VALUES ('$nome', '$pontos', '$abates')";

  $conn->exec($sql);
  header("location: visualizar.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>