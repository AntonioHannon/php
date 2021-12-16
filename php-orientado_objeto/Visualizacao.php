<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
         // Variaveis privadas
    private $espectador;
    private $filme;
    
    
          // metodo construtor de espectador e filme do youtube
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+ 1); // esta acessando o setviews do video e acrecentando mais uma visualização ao video
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+ 1); // esta acessando o espectador e adicionando mais um total assistido a gafanhoto
        
        
    }

    // metodos Getters e Setters
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }

    
    
    
    public function avaliar() {
        $this->filme->setAvaliacao(5);  // avaliação inseri 5 
    }
    public function avaliarNota($nota) {
        $this-> filme->setAvaliacao($nota);  // avaliação recebe uma nota
    }
    public function avaliarPorc($porc) {
     $nova = 0; // verifica a nota pela media pela porcentagem vista do video,, Alterado o SETAValiacao
     
     
        if($porc <= 20){
           $nova = 3; 
        }elseif ($porc <=50) {
            $nova = 5;
        }elseif ($porc <= 90) {
            $nova = 8;
        }else{
            $nova=10;
        }
        
        $this-> filme->setAvaliacao($nova);
        
        
    }

    
    
    
}
