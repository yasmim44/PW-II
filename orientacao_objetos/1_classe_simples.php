<?php
class Pessoa{
    public $nome;
    public $idade;

    public function apresentar(){
        echo "Olá, meu nome é $this->nome";
        echo "<hr>";
        echo "Tenho $this->idade anos";
    }
}
$aluno1 = new Pessoa();
$aluno1->nome = 'Yasmim';
$aluno1->idade= 16;
$aluno1->apresentar();

$aluno2 = new Pessoa();
$aluno2->nome = 'Thiago';
$aluno2->idade = 17;
$aluno2->apresentar();
?>