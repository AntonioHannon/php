<?php

require_once 'acoesVideo.php';

class Video implements acoesVideo {
    
                    // Criando as variaveis privadas para acesso
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    
                    // construtor de novo video
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
        
    }


  
             //metodos getters e setters
    
    
    public function getTitulo(){
        return $this->titulo; 
       
    }
    
    public function setTitulo($titul) {
        $this->titulo = $titul;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($aval) {
        
    
        $media = ($this->getAvaliacao() + $aval)/$this->getViews(); // recebe o que ja tem + avaliação feita pelo usuario, divide pela quantidade de visualizações e cria uma media
        $this->avaliacao = $media;
        
    }
    
    public function getViews() {
        return $this->views;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($like) {
        $this->curtidas = $like;
        
    }
    
    public function getRproduzindo() {
        return $this->reproduzindo;
    }
    public function setReproduzindo($reprodu) {
        $this->reproduzindo = $reprodu;
        
    }

    public function like() {
    
        $this->setCurtidas($this->curtidas++);
        
    }

    public function pause() {
        $this->setReproduzindo(false);
    }

    public function play() {
        $this->setReproduzindo(true);
    }

}
