<?php

function thumb($arq){ // verifica se a imagem existe, ou se o caminho dela esta correto
        $caminho = "fotos/$arq";
        if(is_null($arq) || !file_exists($caminho)){
            return "fotos/indisponivel.png";

        }else{
            return $caminho;
        }
}
?>