<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
    <title>Cadastro</title>
</head>
<body>
    
    <div class = "containertudo2">
        <form action="cadastro.php" method="POST">
            <div class="containerh1">
                <h1 class ="letra-valentime sombra-txt">Criar cadastro</h1>
            </div>
            <div class="containerinput">
                 <input class="block form-control boxshadow"  type="text" placeholder="Nome de usuário" name = "nomeusuario">
                 <input class="block form-control boxshadow" type="password" placeholder="Criar Senha" name= "senhausuario">
                 <input class="block form-control boxshadow" type ="date" name = "datanascimento">
                <input class="block form-control boxshadow" type = "number" placeholder = "Digite seu saldo" name = "saldousuario">
        </div>
        <div class="separator">
                <div></div>
                <div>Preenchido?</div>
                <div></div>
                </div> 
        <div class="divbotao">
            <input class="botaoenviar" type="submit" name="Criar" value="Cadastrar">
        </div>

        </form>
    </div>
    
    
</body>
</html>

<?php
if ($_POST){
    if((empty($_POST['nomeusuario'])) || (empty($_POST['senhausuario'])) || (empty($_POST['datanascimento'])) || (empty($_POST['saldousuario']))){
        echo "<script>alert('Existem campos vazios!!');</script>";
     
    }else{
        $nome = $_POST['nomeusuario'];
       
        function contarArquivosEn ( $path, $extensionArchivo ) 
         {
             $matches = glob ( $path . "*." . $extensionArchivo );
             $numDirectories = 0;
             if ( $matches ) {
                $numDirectories = count( $matches );
             }
             return $numDirectories;
          }

        $quantidadetxt = contarArquivosEn( './', 'txt' ) +1 ;


        for ($i = 1; $i<$quantidadetxt; $i++ ){
            $arquivo = fopen($i . ".txt","r");
            $nome1 = fgets($arquivo);
            $nome1 = trim($nome1);

        
            if ($nome1 == $nome){
                echo "<script>alert('Usuário já existente!!');</script>";
                break;
                
            }elseif($i == $quantidadetxt-1){
                $senha = $_POST['senhausuario'];
                $datanascimento = $_POST['datanascimento'];

                $date = date_create_from_format('Y-m-j', $datanascimento);
                $datenascimento = date_format($date, 'd/m/Y');

                $saldo = $_POST['saldousuario'];
                
                $arquivonovo =  fopen ($quantidadetxt . '.txt', 'w');
                fwrite  ($arquivonovo, $nome ."\n");
                fwrite  ($arquivonovo, $senha ."\n");
                fwrite  ($arquivonovo, $datenascimento ."\n");
                fwrite  ($arquivonovo, $saldo ."R$" ."\n");

                echo "<script>alert('Usuário Criado!!');</script>";
                echo "<script>alert('Redirecionando para a pagina principal');</script>";
                header( "refresh:0.5;url=index.php" );
                
                break;

            }
        } 

     }
        

}
 
?>


