<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    //Atributos
    private $especialidade;
    private $salario = 1400;

    //Métodos especiais
    //Getters
    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    //Setters
    public function setEspecialidade($e){
        $this->especialidade = $e;
    }

    public function setSalario($s){
        $this->salario = $s;
    }

    //Métodos Públicos
    public function receberAumento($as){
       switch($as){
        case 5:
            $this->setSalario($this->salario + ($this->getSalario() * (5 / 100)));
            break;
        case 10:
            $this->setSalario($this->salario + ($this->getSalario() * (10 / 100)));
            break;
        case 15:
            $this->setSalario($this->salario + ($this->getSalario() * (15 / 100)));
            break;
        default:
            echo 'Pedido de aumento inválido'; 
            break;
       }
    }

}
