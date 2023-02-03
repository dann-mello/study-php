<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Atributos
    private $setor;
    private $trabalhando;

    //Métodos especiais
    //Getters
    public function getSetor(){
        return $this->setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }

    //Setters
    public function setSetor($s){
        $this->setor = $s;
    }

    public function setTrabalhando($t){
        $this->trabalhando = $t;
    }

    //Métodos Públicos
    public function mudarTrabalho(){
        if($this->trabalhando){
            $this->trabalhando = false;
            echo 'Você encerrou seu contrato de trabalho com sucesso. Até mais !';
        }else{
            echo 'Funcionalidade inválida. Você não está trabalhando para encerrar contrato.';
        }
    }

}
