<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    //Getters
    public function getBolsa(){
        return $this->bolsa;
    }

    //Setters
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    //Métodos
    public function pagarMensalidade(){
        if($this->idade >= 18 && $this->matricula){
            echo 'Pagamento de R$100,00 efetuado com sucesso !!<br/>';
            echo "Muito obrigado - $this->nome <br />";
        }else{
            if($this->matricula){
                $this->matricula = false;
            }
            echo 'Só aceitamos alunos acima de 17 anos<br />';
        }
    }
}