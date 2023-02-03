<?php
abstract class Animal2{
    protected $peso;
    protected $idade;
    protected $membros;

    //Getters
    public function getPeso(){
        return $this->peso;
    }

    public function getIdade(){
        return $this->idade;
    }
    
    public function getMembros(){
        return $this->membros;
    }

    //Setters
    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }
    
    //Método Abstrato
    public abstract function emitirSom();
}