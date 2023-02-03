<?php
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    //Métodos especiais
    //Construtor 
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

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
 
    public function getExperiencia(){
        return $this->experiencia;
    }

    //Setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }

    //Métodos da classe
    protected function ganharExp(){
        $this->experiencia = 10;
        if($this->experiencia < 50){
            echo 'BeginnerLevel<br />';
        }else if($this->experiencia < 100){
            echo 'MiddleLevel<br />';
        }else{
            echo 'HighLevel<br />';
        }

        echo 'Ganhou mais 10 pontos<br />';
    }
}