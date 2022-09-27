<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <link rel="stylesheet" href="./bootstrap/bootstrap.min.css" type="text/css">
 <title>Toddynho</title>
</head>
<body background="./img/toddyescola.jpg.opdownload">
 <div style="width: 50%;position: absolute;left: 25%;top: 30%;border-radius: 5px;border: 2px;">
  <?php
  $nome = $_GET['nome'];
  
  echo('<h1>' . $nome . " tome aqui seu toddynho!!" . '</h1>');
  echo('<h3 style="text-align: center;">' . "Você é menor de Idade" . '</h3>');
  ?>

 </div>
 
</body>
</html>