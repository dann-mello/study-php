<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    

    //Getters
    public function getRegistroProfissional(){
        return $this->registroProfissional;
    }

    //Setters
    public function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }

    //Métodos
    public final function praticar(){
        echo "$this->nome está exercendo sua função como $this->registroProfissional";
    }


}