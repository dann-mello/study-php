<?php
require_once(__DIR__.'/../especializacoes/Mamifero.php');
class Cachorro extends Mamifero{
    //Métodos abstratos
    public function emitirSom(){
        echo 'au! au! au!<br/>';   
    }

    //Métodos da classe
    public function enterrarOsso(){
        echo 'Enterrando osso<br/>';
    }

    public function abanarRabo(){
        echo 'Abanando o rabo<br/>';
    }
}