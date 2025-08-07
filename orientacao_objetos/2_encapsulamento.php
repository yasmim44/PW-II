<?php
class Aluno {
    public $nome;
    private $rm;

    public function gtRM($valor) {
        
        $this->rm = $valor;
    }

    public function getRM() {
        return $this->rm;
    }
}
$aluno1=new Aluno();
$aluno1->nome= 'Yasmim';
$aluno1->setRM(202411333);
echo "Meu nome é $aluno1->nome <br>";
echo "Meu RM é" . $aluno1->setRM();
?>