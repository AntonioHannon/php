

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
<div class="cabecalho">
    <?php
        require_once 'includes/funcoes.php'; // esta pegando funções de funcoes.php
        require_once 'includes/login.php';  // esta chamando os dados de sessão
        
            if(empty($_SESSION['user'])){ // se o usuario estiver vazio, aparece o botão de login
            echo "<a href='user-login.php'>Logar</a>";
            }else{ // caso já esteja logado, ele irá mostrar o nome, e o botão de logout
            echo "Olá, <strong> " .  $_SESSION['nome'] ."</strong> | " . strtoupper($_SESSION['tipo']) ;
            echo "<br>";
            echo "<a href='logout.php'>logout</a>";
            }
    ?>
</div>

    <h1>Login em php</h1>    
    
</body>
</html>