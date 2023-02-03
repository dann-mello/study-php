<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    protected $matricula;
    protected $curso;

    //Getters
    public function getMatricula(){
        return $this->matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    //Setters
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    //Métodos
    public function pagarMensalidade(){
        if($this->idade < 18 && $this->matricula){
            echo 'Pagamento de R$300,00 efetuado com sucesso !!<br/>';
            echo "Muito obrigado - $this->nome <br />";
        }else{
            if($this->matricula){
                $this->matricula = false;
            }
            echo 'Só aceitamos alunos abaixo de 18 anos<br />';
        }
    }


}