<?php

session_start();



function fechar(){
    session_unset();
}


if(!isset($_SESSION['user'])){

    $_SESSION['user'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['tipo'] = ""; 

}

function cripto($senha){
    $c = '';
    for ($pos = 0; $pos < strlen($senha); $pos++){
        $letra = ord($senha[$pos]) + 1; // pega a senha exemplo admin e coloca uma letra para frente Ex benjo / funcao ord() transforma as letras em numeros
       $c .=chr($letra); // funcao chr  altera de numeros para letras
    }
    return $c;
}

function gerarHash($senha){ // gera senha com hash criptografada
    $txt = cripto($senha);
    $hash = password_hash($txt,PASSWORD_DEFAULT);
    return $hash;
}
function testarHash($senha,$hash){
    $ok = password_verify(cripto($senha), $hash);
    return $ok;


}

?>