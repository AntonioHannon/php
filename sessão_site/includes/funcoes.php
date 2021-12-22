<?php

// pagina de funções
function logout(){  // função para deslogar
    session_unset();
}


function mensagemSucesso($m){ // função de mensagem de sucesso
    $r = "<div class ='sucesso'> $m </div>";
    return $r;

}
function mensagemErro($m){ // função de mensagem de erro
    $r = "<div class ='erro'> $m </div>";
    echo "<br>";
    return $r;   
}


?>