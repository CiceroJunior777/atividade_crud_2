<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_alunos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM alunos WHERE id=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  header("location: visualizar.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>