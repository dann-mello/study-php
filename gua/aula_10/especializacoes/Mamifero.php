<?php
require_once (__DIR__.'/../sc/Animal.php');
class Mamifero extends Animal{
    //Atributos
    protected $corpelo;

    //Métodos Especiais
    //Getters
    public function getCorPelo(){
        return $this->corpelo;
    }

    //Setters
    public function setCorPelo($cp){
        $this->corpelo = $cp;
    }

    //Métodos abstratos
    public function locomover(){
        echo 'Estou correndo<br />';
    }
    public function alimentar(){
        echo 'Estou mamando<br />';
    }
    public function emitirSom(){
        echo 'Som de mamifero<br />';
    }
}