<?php
class Usuario {
    private $id;
    private $titulo;
    private $descricao;
    private $isdn;
    private $dataPublicacao;
    private $preco;
    private $idioma;
    private $foto;

    public function __construct($titulo, $descricao, $isdn, $dataPublicacao, $preco, $idioma, $foto) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->isdn = $isdn;
        $this->dataPublicacao = $dataPublicacao;
        $this->preco = $preco;
        $this->idioma = $idioma;
        $this->foto = $foto;
    }

    public function inserir() {}

    public function buscar($id) {}

    public function buscarTodos() {}

    public function atualizar($id) {}

    public function deletar($id) {}
}
?>
