<?php

$nome = $_POST['nome'];
$pontos = $_POST['pontos'];
$abates = $_POST['abates'];

$servername = "sql203.epizy.com";
$username = "epiz_28950928";
$password = "AnrXjpf2ovg";
$dbname = "epiz_28950928_classificacao";

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