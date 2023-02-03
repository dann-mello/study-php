<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matricula;
    private $curso;

    //Métodos especiais
    //Getters
    public function getMatricula(){
        return $this->matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    //Setters
    public function setMatricula($m){
        $this->matricula = $m;
    }

    public function setCurso($c){
        $this->curso = $c;
    }

    //Métodos Públicos
    public function cancelarMatricula(){
        if($this->matricula){
            $this->matricula = false;
            echo 'Você cancelou sua matricula. Até mais !</br>';
        }else{
            echo 'Funcionalidade inválida pois você não está matriculado(a). Até mais !</br>';
        }
    }

}