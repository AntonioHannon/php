<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Listagem de jogos</title>
</head>
<body>
<?php
    require_once "includes/banco.php"; // requisitando banco.php
    require_once "includes/funcoes.php"; // requisitando funcoes.php
?>
<header>
    
</header>

<section>
<h1>Escolha seu jogo</h1>
<table class="listagem">
    <?php

    //inserindo dados no html pelo bando de dacos

    $q = "select j.cod,j.nome,g.genero,j.capa,p.produtoras  from jogos j join generos g on j.genero = g.cod join produtoras p on j.produtora =p.cod order by nome";// puxando dados do banco de dados
    
    $busca = $banco->query($q);
    if(!$busca){
        echo "<tr><td>Infelizmente a busca deu errado</td></tr>";
    }else{
        if($busca->num_rows==0){
            echo "<tr><td>Nenhum registro foi encontrado</td></tr>";
        }else{
            while($reg=$busca->fetch_object()){
                $t = thumb($reg->capa); // chama a funcao de verificar a imagem
                echo " <tr><td><img src='$t' class='mini'></td>" ; 
                echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>"; // criando um link com ligação BD na pagina detalhes.php
                echo " [$reg->genero]";
                echo "</br> $reg->produtoras ";
                echo " <td>admin</td></tr> ";
                
            }
        }
    }
    ?>

</table>
</section>
<footer>

</footer>
    <?php $banco->close(); ?>
</body>
</html>



