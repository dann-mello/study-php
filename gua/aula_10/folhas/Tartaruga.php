<?php
require_once(__DIR__.'/../especializacoes/Reptil.php');
class Tartaruga extends Reptil{
    //Métodos abstratos
    public function locomover(){
        echo 'Andando beeeem devagar<br />'; 
    }
}