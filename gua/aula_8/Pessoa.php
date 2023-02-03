<?php
class Pessoa{
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;

    //Métodos especiais
    //Getters
    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    //Setters
    public function setNome($n){
        $this->nome = $n;
    }

    public function setIdade($i){
        $this->idade = $i;
    }

    public function setSexo($s){
        $this->sexo = $s;
    }

    //Métodos Publicos
    public function fazerAniver(){
        $this->idade++;
        echo 'Parabéns, curta seus '.$this->getIdade().' anos.';
    }
}