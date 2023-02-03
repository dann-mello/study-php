<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    //Métodos especiais
    //Construtor
    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //Getters
    public function getTitulo(){
        return $this->titulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function getViews(){
        return $this->views;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    //Setters
    public function setAvaliacao($avaliacao){
        $this->avaliacao = $avaliacao;
    }
 
    public function setTitulo($titulo){
        $this->titulo = $titulo; 
    }

    public function setViews($views){
        $this->views = $views; 
    }

    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas; 
    }

   
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo; 
    }

    //Métodos Abstratos
    public function play(){
        if($this->reproduzindo){
            echo 'Já está reproduzindo<br />'; 
        }else{
            $this->reproduzindo = true;
            echo 'Play |><br />';
        }
    }

    public function pause(){
        if($this->reproduzindo){
            $this->reproduzindo = false;
            echo 'Pause ||<br />';
        }else{
            echo 'Já está pausado<br />';  
        }
    }

    public function like(){
       $this->curtidas++;
       echo 'Mais 1 curtida<br />'; 
       echo 'Total de curtidas: '.$this->getCurtidas().'<br />'; 
    }
}