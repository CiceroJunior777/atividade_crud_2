<?php

$id     = $_GET['id'];
$pontos = $_POST['pontos'];
$abates = $_POST['abates'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classificacao";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE equipes SET pontos='$pontos', abates='$abates' WHERE id=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  header("location: visualizar.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>