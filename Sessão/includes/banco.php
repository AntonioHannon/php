<?php


    $banco = new mysqli("localhost","root","","sessao"); // acessando o banco de dados

    if($banco->connect_errno){ // verifica se o banco foi conectado com sucesso, se não para o algoritmo
        echo "<p>Encontrei um erro $banco->errno --> $banco->connect_error</p>";
        die();
    }


        // colcando em caracteres utf8 o banco de dados!!
        
    $banco->query("set names 'utf8");
    $banco->query("set character_set_connection=utf8");
    $banco->query("set character_set_client = utf8");
    $banco->query("set character_set_results = utf8");








?>