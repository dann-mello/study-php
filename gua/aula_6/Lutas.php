<?php
require_once 'Lutador.php';
class Luta{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos especiais
    //Getters
     
    public function getDesafiado(){
        return $this->desafiado;
    }

   
    public function getDesafiante(){
        return $this->desafiante;
    }

   
    public function getRounds(){
        return $this->rounds;
    }

  
    public function getAprovada(){
        return $this->aprovada;
    }

    //Setters    
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

 
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

 
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

 
    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }

    //Métodos Públicos
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2){
            $this->aprovada = true;
            $this->desafiado = $l2;
            $this->desafiante = $l1;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor){
                case 0:
                    echo 'Empatou !';
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo 'Vitória do '.$this->desafiante->getNome();
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo 'Vitória do '.$this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
        }else{
            echo 'Luta não pode acontecer !';
        }
    }
}