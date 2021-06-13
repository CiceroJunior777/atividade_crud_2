<?php

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
  $stmt = $conn->prepare("SELECT * FROM alunos");
  $stmt->execute();


  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo '<tr>';
    echo '<td>'.$v['aluno'].'</td>';
    echo '<td>'.$v['id'].'</td>';
    echo '<td>'.$v['disciplina'].'</td>';
    echo '<td>'.$v['n1'].'</td>';
    echo '<td>'.$v['n2'].'</td>';
    echo '<td> <a href="excluir.php?id='.$v['id'].'" class="btn btn-primary"> <i class="bi bi-trash"></i> </a> </td>';
    echo '</tr>';
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>