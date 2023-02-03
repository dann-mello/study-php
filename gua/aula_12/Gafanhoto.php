<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistindo;

    //Construtor
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    //Getters
    public function getLogin(){
        return $this->login;
    }

    public function getTotAssistindo(){
        return $this->totAssistindo;
    }

    //Setters
    public function setLogin($login){
        $this->login = $login;
    }

    public function setTotAssistindo($totAssistindo){
        $this->totAssistindo = $totAssistindo;
    }

    //Métodos da classe
    public function viuMaisUm(){
        $this->totAssistindo++;
    }
}