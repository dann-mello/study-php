<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta = 0.5;
    protected $carga;
    private $tampada;

    public function rabiscar(){
        if ($this->tampada === true) {
            echo "ERRO... não posso rabiscar ";
        }else{
            echo "Estou rabiscando ";
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }
}
