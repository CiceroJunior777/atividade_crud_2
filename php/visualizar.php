<!DOCTYPE html>
<html lang="pt-br">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="css/estilo.css" rel="stylesheet">

</head>

<body>
<!--INÍCIO-->
<nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Classificação</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>


<!--tabela fixa-->
<div class="table-responsive" style="float:left;">
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
      <th class="col">Posição</th>
      </tr>
    </thead>
    <tbody>
      <tr><th class="bg-primary" scope="row">1</th></tr>
      <tr><th class="bg-primary" scope="row">2</th></tr>
      <tr><th class="bg-primary" scope="row">3</th></tr>
      <tr><th class="bg-primary" scope="row">4</th></tr>
      <tr><th class="bg-primary" scope="row">5</th></tr>
      <tr><th scope="row">6</th></tr>
      <tr><th scope="row">7</th></tr>
      <tr><th scope="row">8</th></tr>
      <tr><th scope="row">9</th></tr>
      <tr><th scope="row">10</th></tr>
      <tr><th scope="row">11</th></tr>
      <tr><th scope="row">12</th></tr>
    </tbody>
  </table>
</div>


<!--tabela dinamica-->
  <div class="table-responsive" class="container" style="text-align: center;">
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
      <th class="col">Equipe</th>
      <th class="col">Pontos</th>
      <th class="col">Abates</th>
      <th class="col">Opções</th>
      </tr>
    </thead>
    <tbody>
      <tr scope="row">
      <?php include 'banco.php';?> 
      </tr>
    </tbody>
  </table>
</div>
</table>

    <!--JAVA SCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>