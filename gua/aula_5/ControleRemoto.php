<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos especiais
    //Construtos
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;  
    }


    //Getters
    private function getVolume(){
        return $this->volume;
    }

    private function getLigado(){
        return $this->ligado;
    }
    
    private function getTocando(){
        return $this->tocando;
    }

    //Setters
    private function setVolume($v){
        $this->volume = $v;
    }
    
    private function setLigado($l){
        $this->ligado = $l;
    }

    private function setTocando($t){
        $this->tocando = $t;
    }

    //Métodos Abstratos
    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo '<----------------    M E N U    ---------------------->';
        echo '<br/>Está ligado ?: '.($this->getLigado() ? 'SIM':'NÃO');
        echo '<br/>Está tocando ?: '.($this->getTocando() ? 'SIM':'NÃO');
        echo '<br/>Volume: '.$this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i++){
            echo '|';
        }
        echo '<br/>';
    }

    public function fecharMenu(){
        echo 'Menu fechado';
    }

    public function maisVolume(){
        if($this->getLigado() && $this->getVolume() >= 0){
            $this->setVolume($this->getVolume() + 1);
        }
    }

    public function menosVolume(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - 1);
        }else{
            echo 'Já esta mudo';
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() === 0){
            $this->setVolume(10);
        }
    }

    public function play(){
        if($this->getLigado() && $this->getTocando() === false){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
            echo 'PAUSE ||';
        }
    }

}