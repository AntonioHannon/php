<?php

echo "<header>";


if(empty($_SESSION['user'])){
    echo "<a href='user-login.php'>Entrar</a>";
}else{
    echo "Olá, <strong> " .  $_SESSION['user'] ."</strong>";
    echo "<br> <a href='index.php'>Sair</a>' ". fechar();
}

 

echo "</header>";



?>
