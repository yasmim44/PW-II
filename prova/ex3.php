<!-- "o usuário pode inserir quantos jogadores desejar. 
Use if else para a verificar a idade e em qual categoria o jogador irá competir” -->

<?php
session_start();


if (!isset($_SESSION['jogadores'])) {
    $_SESSION['jogadores'] = [];
}

if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade = (int)$_GET['idade'];

    if ($idade < 12) {
        $categoria = "Infantil";
    } elseif ($idade < 18) {
        $categoria = "Juvenil";
    } elseif ($idade < 35) {
        $categoria = "Adulto";
    } else {
        $categoria = "Veterano";
    }

    // Adiciona ao array
    $_SESSION['jogadores'][] = [
        'nome' => $nome,
        'idade' => $idade,
        'categoria' => $categoria
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Jogadores</title>
</head>
<body>

<h2>Cadastrar Jogador</h2>
<form method="get" action="">
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    <input type="submit" value="Cadastrar">
</form>

<h2>Jogadores Cadastrados:</h2>
<?php
if (!empty($_SESSION['jogadores'])) {
    foreach ($_SESSION['jogadores'] as $jogador) {
        echo "{$jogador['nome']} ({$jogador['idade']} anos) - Categoria: {$jogador['categoria']}<br>";
    }
} else {
    echo "Nenhum jogador cadastrado ainda.";
}
?>

</body>
</html>
