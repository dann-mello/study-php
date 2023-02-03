<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador;
    private $filme;

    //Construtor
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
    }

    //Getters
    public function getEspectador(){
        return $this->espectador;
    }

    public function getFilme(){
        return $this->filme;
    }

    //Setters
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }

    public function setFilme($filme){
        $this->filme = $filme;
    }

    //Métodos da classe
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
}