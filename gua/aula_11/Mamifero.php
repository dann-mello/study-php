<?php
require_once 'Animal.php';
class Mamifero extends Animal2{
    protected $corPelo;
    
    //Getters
    public function getCorPelo(){
        return $this->corPelo;
    }

    //Setters
    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }

    //Métodos Abstratos
    public function emitirSom(){
        echo 'Som de mamífero<br />';
    }
}