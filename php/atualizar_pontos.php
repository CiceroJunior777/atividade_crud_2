<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classificacao";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT id, pontos, abates from equipes WHERE id=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  foreach($stmt->fetchAll() as $k=>$v) {
   $id     = $v['id'];
   $pontos = $v['pontos'];
   $abates = $v['abates'];
  }


} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
</head>

<body>

    <!--INÍCIO-->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Atualizar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>


<br><br><br><br><br><br><br>


    <!--Formulário-->
    <main class="container">
    <form id="formulario" class="row g-3 needs-validation" action="atualizar.php?id=<?php echo $id?>" method="post">
        <div class="col-4">
            <label for="id" class="form-label">Id</label>
            <input type="int" class="form-control" name="id" id="id" value="<?php echo $id?>" required disabled>
        </div>
        <div class="col-4">
            <label for="p" class="form-label">Pontos</label>
            <input type="int" class="form-control" name="pontos" id="p" value="<?php echo $pontos?>" required>
        </div>
        <div class="col-4">
            <label for="a" class="form-label">Abates</label>
            <input type="int" class="form-control" name="abates" id="a" value="<?php echo $abates?>" required>
        </div>
        <div  class="d-grid gap-2 col-6 mx-auto" >
        <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
    </main>


    <!--JAVA SCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
</body>

</html>