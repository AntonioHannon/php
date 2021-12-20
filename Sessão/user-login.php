<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

require_once "includes/funcoes.php"; // puxando as funções 
require_once "includes/login.php"; // puxando os dados de Sessão
require_once "includes/banco.php"; // puxando os dados do banco de dados!

// captando os dados enviados pelo metodo post no formulario e colocando nas variaveis $u e $s
$u = $_POST['user'] ?? null;
$s = $_POST['senha'] ?? null;

  // caso a variavel $u e $s foram vazias, ele faz requisição do formulario para login
if(is_null($u) || is_null($s)){
    require "login-form.php";
}else{
 

    $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '$u' LIMIT 1 "; //o comando para puxar os dados do usuario $u

    $busca = $banco->query($q);// efetua a busca usando o comando $q 

        if(!$busca){
            echo mensagemErro('Falha ao acessar o sistema '); // usuario nao encontrado, mas para segurança, nao é exibido isso ao usuario
        }else{
           
            if($busca->num_rows > 0){
                $reg = $busca->fetch_object(); //  Retorna a linha atual do conjunto de resultados como um objeto

                if(testarHash($s,$reg->senha)){ // verifica se a senha bate com a que esta no banco de dados, testando a hash;
                    $_SESSION['user'] = $reg->usuario;
                    $_SESSION['nome'] = $reg->nome;
                    $_SESSION['tipo'] = $reg->tipo;
                    echo mensagemSucesso("Logado com sucesso!!"); // mensagem de sucesso no login
                    echo " <a href='index.php'> --> </a>";  // seta para voltar logado a pagina index
                  
            
                }else{
                    echo mensagemErro('Usuario ou senha incorreto!'); // mensagem de erro, caso senha e login estejam incorretos
                    echo "<a href='user-login.php'>Voltar</a>"; // voltar para login.php e iniciar o formulario novamente
                }


            }


        }

}

?>    



</body>
</html>

