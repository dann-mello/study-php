<?php
require_once 'Mamifero.php';
class Lobo extends Mamifero{
    //Métodos Abstratos
    public function emitirSom(){
        echo 'Auuuuuuuuu!<br />';
    }
}