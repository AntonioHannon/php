<?php
 // classe abstrata, é so um modelo para dar herança a outras classes, no caso aqui o gafanhoto
abstract class Pessoa {

                // variaveis protegidas
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    
            // metodo construtor de uma pessoa
    
    
    public function __construct($nome,$idade,$sexo) {
        
        $this->nome = $nome;
        $this-> idade = $idade;
        $this-> sexo = $sexo;
        $this->experiencia = 0 ;
        
    }






    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setExperiencia($experiencia): void {
        $this->experiencia = $experiencia;
    }

    
    protected function ganharExp($n) {
        $this->setExperiencia($this->experiencia += $n);
    }
    
    
    
    
    
    
    
    
}
