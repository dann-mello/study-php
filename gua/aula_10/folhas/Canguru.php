<?php
require_once(__DIR__.'/../especializacoes/Mamifero.php');
class Canguru extends Mamifero{
    //Métodos da classe
    public function usarBolsa(){
        echo 'Usando bolsa<br />';
    }

    //Métodos abstratos
    public function locomover(){
        echo 'Saltando...';
    }
}