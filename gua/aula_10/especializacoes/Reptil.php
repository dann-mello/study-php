<?php
require_once (__DIR__.'/../sc/Animal.php');
class Reptil extends Animal{
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

    //Métodos abstratos
    public function locomover(){
        echo 'Estou rastejando<br />';
    }
    public function alimentar(){
        echo 'Comendo vegetais<br />';
    }
    public function emitirSom(){
        echo 'Som de Reptil<br />';
    }
}