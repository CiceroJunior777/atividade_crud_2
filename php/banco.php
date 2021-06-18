<?php

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
  $stmt = $conn->prepare("SELECT * FROM equipes ORDER BY pontos desc");
  $stmt->execute();


  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo '<tr>';
    echo '<td>'.$v['equipes'].'</td>';
    echo '<td>'.$v['pontos'].'</td>';
    echo '<td>'.$v['abates'].'</td>';
    echo '<td> <a href="excluir.php?id='.$v['id'].'"> <i class="bi bi-trash"></i> </a></td>';
    echo '</tr>';
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>