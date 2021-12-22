<?php

session_start(); // inicia a sessão
if(!isset($_SESSION['user'])){ // se o usuario estiver vazio, inicia as variaveis de sessao em branco
    $_SESSION['user'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['tipo'] = "";
}
 // aqui tambem serão depositados, quando logado com login e senha os dados de sessão!!

function cripto($senha){
    $c = '';
    for($pos = 0; $pos < strlen($senha); $pos++ ){ // contador até o numero de caracteres passados na senha exemplo ab tem dois, entao ele conta de  0 a 1
        $letra = ord($senha[$pos]) +1 ; // incrementa uma letra a frente, exemplo se entrar a, será transformado em b
        $c .= chr($letra);
    }
    return $c; // retorno da hash
}

 
function gerarHash($senha){ // gera a hash, junto da criptografia 
    $txt = cripto($senha);
    $hash = password_hash($txt,PASSWORD_DEFAULT);
    return $hash;    
}


function testarHash($senha,$hash){ // verifica a senha enviada, verifica sua hash e compara com o banco de dados!
    $ok = password_verify(cripto($senha), $hash);
    return $ok;

}












?>





