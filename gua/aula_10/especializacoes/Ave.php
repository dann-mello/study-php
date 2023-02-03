<?php
require_once (__DIR__.'/../sc/Animal.php');
class Ave extends Animal{
    //Atributos
    protected $corPena;

    //Métodos Especiais
    //Getters
    public function getCorPelo(){
        return $this->corPena;
    }

    //Setters
    public function setCorPelo($cp){
        $this->corPena = $cp;
    }

    //Métodos da classe
    public function fazerNinho(){
        echo 'Construiu ninho<br />';
    }

    //Métodos abstratos
    public function locomover(){
        echo 'Estou voando<br />';
    }
    public function alimentar(){
        echo 'Comendo frutas<br />';
    }
    public function emitirSom(){
        echo 'Som da Ave<br />';
    }
}