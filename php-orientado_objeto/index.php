<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        // chamando as paginas com o require once
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'visualizacao.php';
        
        // criando videos
        $v[0] = new Video("curso de PHP");
        $v[1] = new Video("Curso de HTML");
        $v[2] = new Video ("curso de Javascript");
        
      
        

        
        // criando pessoas
        $p[0] = new Gafanhoto("Antonio",25,"Masculino","est.antonio.s");
        $p[1] = new Gafanhoto("Maria",20,"Feminino","Maria.z");
        
        
        
        // nova visualização da pessoa P[0] no video[0]
        $vis[0] = new Visualizacao($p[0], $v[0]);
        $vis[1] = new Visualizacao($p[0], $v[2]);
        $vis[2] = new Visualizacao($p[0],$v[0]);
      
        $vis[0]->avaliarPorc(50);
        $vis[0]->avaliar();
                
                
        print_r($vis);
        
        
        
        
        ?>
        </pre>
    </body>
</html>
