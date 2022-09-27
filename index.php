<!doctype html>
<html lang="pt-BR">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="./css/styles.css" type="text/css">
 <link rel="stylesheet" href="./bootstrap/bootstrap.min.css" type="text/css">
 <title>LOGIN</title>
</head>

<body>
 <!-- login -->
 <div class = "containertudo2">
    <form action="index.php" method="GET">
        <div class="containerh1">
            <h1 class ="letra-valentime sombra-txt">Login</h1>
        </div>
        <div class="containerinput">
             <input class="block form-control boxshadow"  type="text" placeholder="Nome de usuário" name = "nome">
             <input class="block form-control boxshadow" type="password" placeholder="Criar Senha" name= "senha">
    </div>
    <div class="divbotao">
        <input class="botaoenviar" type="submit" value="Entrar">     
    </div>
    <div class="separator">
            <div></div>
            <div>OU</div>
            <div></div>
            </div> 
    <div class="divbotao">
        <a href="./cadastro.php">
            <input class="botaoenviar" type="button" value="Cadastrar">
        </a>       
    </div>

    </form>
</div>
		
 <script src="./bootstrap/bootstrap.min.js"></script>
</body>

</html>
 <?php	
  if($_GET){
      if(empty($_GET['nome']) || empty($_GET['senha'])){
        }else{
            $nome = $_GET['nome'];
            $senha = $_GET['senha'];


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



            for($i = 1; $i < $quantidadetxt; $i++){


                $arquivo = fopen($i . ".txt","r");
                
        
                $nome1 = fgets($arquivo);
                $nome1 = trim($nome1);
                if($nome1 == $nome){
                    $arqcerto = file($i . ".txt");
        
                    if($senha == (trim($arqcerto[1]))){
                        echo("login certo!!" . "<BR>");
                        $hoje = date('d-m-Y');
                        $dataN = trim($arqcerto[2]);
                        echo("hoje: " . $hoje . "<BR>". "nascimento: " . $dataN . "<br>");
                        
                        $nascimento = DateTime::createFromFormat("d/m/Y", $dataN);
                        $atual = new DateTime($hoje);
                        $idade = $nascimento->diff($atual);
                        $verificaIdade =( $idade->days);
                        $verificaIdade = $verificaIdade/365.25;
                        if($verificaIdade < 18){
                            header("location: Toddynho.php?nome=$nome");
                        }else{
                            $saldo = trim($arqcerto[3]);
                            header("location: Saldo.php?nome=$nome&saldo=$saldo");
                        }
        
                        break;
                        
                        
                        
                        
                    }else{
                        continue;
                    }
                    
                }else if($i == 3){
                    echo "<script>alert('Login Invalido!!');</script>";
                }
        
                }
                
                }
                fclose($arquivo);
  

  }
      
    
  
;
 ?>

