<?php
class Pessoa {
    public $nome;
    public $tipo;

    public function mostrarTipo(){
        echo "A pessoa $this->nome é do tipo $this->tipo <hr>";
    }
}

class PessoaComum extends Pessoa{
public $cpf;
}

class Empresa extends Pessoa{
public $cnpj;
}

$pessoa = new PessoaComum();
$pessoa->nome = 'Yasmim';
$pessoa->tipo = 'Comum';

$empresa = new Empresa();
$empresa->nome = 'WMI engenharia';
$empresa->tipo = 'juridica';

$pessoa->mostrarTipo();
$empresa->mostrarTipo();

?>