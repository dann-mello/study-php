<?php
require_once (__DIR__.'/../sc/Animal.php');;
class Peixe extends Animal{
    //Atributos
    protected $corEscama;

    //Métodos Especiais
    //Getters
    public function getCorPelo(){
        return $this->corEscama;
    }

    //Setters
    public function setCorPelo($ce){
        $this->corEscama = $ce;
    }

    //Métodos da classe
    public function soltarBolha(){
        echo 'Soltou uma bolha<br />';
    }

    //Métodos abstratos
    public function locomover(){
        echo 'Estou nadando<br />';
    }
    public function alimentar(){
        echo 'Comendo substâncias<br />';
    }
    public function emitirSom(){
        echo 'Peixe não faz som<br />';
    }
}