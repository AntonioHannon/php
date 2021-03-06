<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        section{
            width: 270px;
            font-size: 13pt;
        } td{
            padding: 6px;
        }h1{
            text-align: center;
        }

    </style>
    <title>Login de usuário</title>
</head>
<body>
    <?php
        require_once "includes/login.php";
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>
    <head>

    </head>
    <section>
        <?php
        $u =$_POST['usuario'] ?? null;
        $s =$_POST['senha'] ?? null ;

        if(is_null($u) || is_null($s)){
            require "user-login-form.php";
        }else{
            $q = "SELECT usuario, nome, senha , tipo FROM usuarios WHERE usuario = '$u' LIMIT 1 ";
            $busca = $banco->query($q);
            if(!$busca){
                echo msg_erro('Falha ao acessar o sistema!!');
            
            
            }else{
                if($busca->num_rows > 0){
                    $reg = $busca->fetch_object();
                if(testarHash($s, $reg->senha)){
                        echo msg_sucesso('Login efetuado com sucesso!!');
                        $_SESSION['user'] = $reg->usuario;
                        $_SESSION['nome'] = $reg->nome;
                        $_SESSION['tipo'] = $reg->tipo;
                    }else{
                        echo msg_erro(' Senha invalida');
                    } 
                }else{
                   echo msg_erro('Usuario não encontrado!! ');
                }

              
            }
        }
     

        echo voltar();

       

        
        ?>
    </section>
</body>
</html>