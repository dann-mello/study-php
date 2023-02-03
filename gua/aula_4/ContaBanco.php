<?php
/*
Proj Conta Bancária - 
Atributos - 
- $numConta;
- $tipo; CC ou CP
- $dono;
- $saldo;
- $status.

Métodos - 
- abrirConta; CC + 50R$ -> saldo ou CP + 150R$  -> saldo
- fecharConta; Não pode deixar dinheiro ou estar no débito
- depositar; status -> true
- sacar; status -> true + saldo
- pagamentoMensal. CC + 12R$  CP + 20R$

*/
    class ContaBanco{
        //Declarations
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct(){
            $this->saldo = 0;
            $this->status = false;
        }

        //Getters
        public function getNumConta(){
            return $this->numConta;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getDono(){
            return $this->dono;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function getStatus(){
            return $this->status;
        }
        //Getters


        //Setters
        public function setAbrirConta($d,$open){
            $this->dono = $d;
            $this->tipo = $open;
            $this->status = true;
            if($open === 'CC'){
                $this->saldo = 50;
            }else if($open === 'CP'){
                $this->saldo = 150;
            }
            // $this->numConta = rand(1,1000);
        }

        public function setFecharConta(){
            if($this->saldo > 0){
                print_r('Impossível fechar a conta com esta quantia guardada. Saque primeiro !');
            }else if($this->saldo < 0){
                print_r('Impossível fechar a conta com esta divida. Pague o que deve FDP !');
            }else{
                $this->status = false;
                print_r('Obrigado pelo tempo conosco. Até breve');
            }
        }

        public function setDepositar($addMoney){
            if($this->status === true){
                $this->saldo += $addMoney;
            }
        }

        public function setSacarDinheiro($removeMoney){
            if($this->status === true && $this->saldo >= $removeMoney){
                $this->saldo -= $removeMoney;
            }else{
                $this->saldo = 'Pedido de saque negado';
            }
        }

        public function setPagamentoMensal(){
            if($this->tipo === 'CC'){
                $this->saldo -= 12;
            }else if($this->tipo === 'CP'){
                $this->saldo -= 20;
            }
        }
        //Setters
    }

