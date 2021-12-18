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
   
// entrada de dados do db

$user_db = 'est.antonio.s';
$nome_db = 'Antonio';
$senha_db = 'admin';
$tipo_db = 'Administrador';

// captando os dados enviados pelo metodo post no formulario e colocando nas variaveis $u e $s
$u = $_POST['user'] ?? null;
$s = $_POST['senha'] ?? null;

  // caso a variavel $u e $s foram vazias, ele faz requisição do formulario para login
if(is_null($u) || is_null($s)){
    require "login-form.php";
}else{
 
    if($user_db == $u && $senha_db == $s){ // se a variavel $u e $s forem iguais as entradas do banco de dados $user_db e $senha_db ele ira inicar a sessao, colocando dados em $_session
        $_SESSION['user'] = $user_db;
        $_SESSION['nome'] = $nome_db;
        $_SESSION['tipo'] = $tipo_db;
        echo mensagemSucesso("Logado com sucesso!!"); // mensagem de sucesso no login
        echo " <a href='index.php'> --> </a>";  // seta para voltar logado a pagina index
      

    }else{
        echo mensagemErro('Usuario ou senha incorreto!'); // mensagem de erro, caso senha e login estejam incorretos
        echo "<a href='user-login.php'>Voltar</a>"; // voltar para login.php e iniciar o formulario novamente
    }

}

?>    



</body>
</html>

