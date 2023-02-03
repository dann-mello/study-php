<?php
class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Métodos Especiais
    //Construtor
    public function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $vitorias,
        $derrotas,
        $empates
    ){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->getCategoria();
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    //Getters
    public function getNome(){
        return $this->nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    //Setters
    private function setNome($nome){
        $this->$nome = $nome;
    }

    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade){
        $this->idade = $idade;
    }

    private function setAltura($altura){
        $this->altura = $altura;
    }

    private function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = 'Inválido';
        }else if($this->getPeso() <= 70.3){
            $this->categoria = 'Leve';
        }else if($this->getPeso() <= 83.9){
            $this->categoria = 'Médio';
        }else if($this->getPeso() <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Inválido';
        }
    }

    private function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates){
        $this->empates = $empates;
    }

    //Métodos funcionais
    public function apresentar(){
        echo 'Nome: '.$this->getNome().'<br />';
        echo 'Idade: '.$this->getIdade().'<br />';
        echo 'Altura: '.$this->getAltura().'cm <br />';
        echo 'Peso: '.$this->getPeso().'Kg <br />';
        echo 'Categoria: '.$this->getCategoria().'<br />';
        echo 'País: '.$this->getNacionalidade().'<br />';

        echo '-----------------------------------------------<br />';
    }

    public function status(){
        echo $this->getNome().':<br /><br />';
        echo 'Nº de Vitórias: '.$this->getVitorias().'cm <br />';
        echo 'Nº de Derrotas: '.$this->getDerrotas().'<br />';
        echo 'Nº de Empates: '.$this->getEmpates().'<br />';
        echo '-----------------------------------------------<br />';
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}