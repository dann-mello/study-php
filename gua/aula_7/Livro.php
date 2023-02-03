<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual = 0;
    private $aberto = false;
    private $leitor;

    //Métodos especiais
    //Construtor
    public function __construct(
        $titulo,
        $autor,
        $totPaginas,
        $leitor
    ){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    //Getters
    private function getTitulo(){
        return $this->titulo;
    }

    private function getAutor(){
        return $this->autor;
    }

    private function getTotPaginas(){
        return $this->totPaginas;
    }

    private function getPagAtual(){
        return $this->pagAtual;
    }
 
    private function getAberto(){
        return $this->aberto;
    }

    private function getLeitor(){
        return $this->leitor;
    }

    //Setters
    private function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    private function setAutor($autor){
        $this->autor = $autor;
    }

    private function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    private function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    private function setAberto($aberto){
        $this->aberto = $aberto;
    }

    private function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    //Implementação
    public function detalhes(){
        echo 'Título do livro: '.$this->getTitulo().'<br />';
        echo 'Autor do livro: '.$this->getAutor().'<br />';
        echo 'Total de páginas: '.$this->getTotPaginas().'<br />';
        echo 'Está aberto ?: '.($this->getAberto() ? 'SIM' : 'NÃO').'<br />';
        echo '<------------------  ------------------------><br /><br />';
    }

    //Métodos abstratos
    public function abrir(){
        if($this->aberto === false){
            $this->aberto = true;
            $this->setPagAtual(1);
            echo 'Página '.$this->getPagAtual().'<br /><br />';
        }
    }

    public function fechar(){
        if($this->aberto){
            $this->aberto = false;
            echo 'Título do livro: '.$this->getTitulo().'<br />';
        }
    }

    public function folhear(){
        for($i = 0;$i <= $this->getTotPaginas(); $i++){
            echo $i.'<br />';
        }
        echo '<br />';
    }

    public function avancarPag($prox){
        if($prox > $this->totPaginas || $prox < $this->pagAtual){
            echo 'Funcionalidade inválida <br />';
        }else{
            $this->setPagAtual($prox);
            echo 'Pg'.$this->getPagAtual().'<br />';
        }
    }

    public function voltarPag($prox){
        if($prox < 0 || $prox > $this->pagAtual){
            echo 'Funcionalidade inválida <br />';
        }else{
            $this->setPagAtual($prox);
            echo 'Pg'.$this->getPagAtual().'<br />';
        }
    }
}