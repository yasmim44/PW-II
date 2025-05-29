<?php
include '../../config/connection.php';
include '../../config/connection.php';
include '../../includes/header.php';
include '../../includes/menu.php';

$stmt = $pdo->query('SELECT * FROM usuario');
$usuarios = $stmt->fetchAll();

// echo "<pre>";
// echo var_dump($usuarios);

?>
<?php foreach ($usuarios as $indice => $user){?>
<p><strong>Nome:</strong><?php echo $user["username"]?></p>
<a href="http://localhost/PW-II/PDO_crud/public/usuario/delete.php?id=<?php echo $user['id']; ?>">Remover</a>
<a href="http://localhost/PW-II/PDO_crud/public/usuario/update.php?id=<?php echo $user['id']; ?>">Editar</a>
<hr>
<?php } ?>
<?include '../../includes/footer.php' ?>