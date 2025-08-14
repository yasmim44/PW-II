<?php
class Usuario {
    private $id;
    private $nome;
    private $nota;
    private $comentario;
    private $data;

    public function __construct($nome, $nota, $comentario, $data) {
        $this->nome = $nome;
        $this->nota = $nota;
        $this->comentario = $comentario;
        $this->data = $data;
    }

    public function inserir() {}

    public function buscar($id) {}

    public function buscarTodos() {}

    public function atualizar($id) {}

    public function deletar($id) {}
}
?>
