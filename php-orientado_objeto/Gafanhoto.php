<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa {
            // novas variaveis privadas
    private $login;
    private $totAssistido;
    
    
                // construtor puxando herança da classe abstrata Pessoa
    public function __construct($nome,$idade,$sexo,$login) {
        
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
        
    }




            //Getters e setters 

    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }


    
    
    public function viuMaisUm() {
        $this->setTotAssistido($this->totAssistido++);
    }   
}
