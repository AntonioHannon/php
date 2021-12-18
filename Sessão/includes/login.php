<?php

session_start(); // inicia a sessão
if(!isset($_SESSION['user'])){ // se o usuario estiver vazio, inicia as variaveis de sessao em branco
    $_SESSION['user'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['tipo'] = "";
}
 // aqui tambem serão depositados, quando logado com login e senha os dados de sessão!!
?>





