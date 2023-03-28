<?php

//importação 
require_once("pessoa.class.php");
//nome classe
class Teste {
    //objeto pessoa com a classe privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe pessoa
        $pessoa = new Pessoa();

        //passar um valor para o método setNome
        $pessoa->setNome($_POST['nome']);
        //imprimir o valor do método getNome
        echo $pessoa->getNome()."<br><br>";

        //passar um valor para o método setTelefone
        $pessoa->setTelefone($_POST['telefone']);
        //imprimir o valor do método getTelefone
        echo $pessoa->getTelefone()."<br><br>";

        //passar um valor para o método setOrigem
        $pessoa->setOrigem($_POST['origem']);
        //imprimir o valor do método getOrigem
        echo $pessoa->getOrigem()."<br><br>";

        //passar um valor para o método setData
        $pessoa->setData($_POST['data']);
        //imprimir o valor do método getData
        echo $pessoa-> getData()."<br><br>";

        //passar um valor para o método setObservacao
        $pessoa->setObservacao($_POST['observacao']);
        //imprimir o valor do método getObservacao
        echo $pessoa->getObservacao()."<br><br>";

    }
 
}new Teste();

?>