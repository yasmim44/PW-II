<?php
class Forma {
    public function desenhar(){
        echo "Desenha algo!";
    }
}

class Circulo extends Forma {
    public function desenhar(){
        echo "Desenhando um circulo";
    }
}

$figura = new Circulo();
$figura->desenhar();


?>