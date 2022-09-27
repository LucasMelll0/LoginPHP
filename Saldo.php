<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <link rel="stylesheet" href="./bootstrap/bootstrap.min.css" type="text/css">
 <title>Saldo:<?php 
 $saldo = $_GET['saldo'];
 echo(str_replace(array("R,$"),'',$saldo)); ?></title>
</head>
<body style="background-color: <?php
$saldo = $_GET['saldo'];
 $saldo = str_replace(array("R","$"), '', $saldo);
 $saldo = floatval($saldo);
 if($saldo > 0){
  echo("green");
 }else{
  echo("red");
 }  
?>;">
 
 <div style="background-color: white; width: 50%;position: absolute;left: 25%;top: 30%;border-radius: 5px;border: 2px;">
  <?php
  echo('<h1 style="text-align: center;">' . $_GET['nome'] . '</h1>');
  if($saldo > 0){
   echo( '<h3 style="text-align: center;">' . "Com o saldo de R$" . $saldo . " seu saldo é positivo!!" . '</h3>');
   echo('<p style="font-style: italic;text-align: center;">'. "'continue trabalhando para o seu patrão continuar viajando'" .'</p>');
  }else{
   echo('<h3 style="text-align: center;">' . "Com o saldo de R$" . $saldo . " seu saldo é negativo!!" . '</h3>');
   echo('<p style="font-style: italic;text-align: center;">'. "'Isso pq ainda faltou tirar o dinheiro da pensão'" .'</p>');
  }
  

  ?>
 </div>
 
</body>
</html>