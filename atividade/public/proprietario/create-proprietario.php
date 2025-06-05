
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-3 p-4 border bg-#FFD9F2">
            <form action="create.php" method="post">
                <div class="mb-3">
                    <label for="username"class="form-label">Nome de Usuario</label>
                    <input type="text" name="username" id="username" class="form-control">
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="tpassword" name="password" id="password" class="form-control">
                    
                </div>
                <button type="submit" class="btn btn-pink">Enviar</button>

            
            </form>
            
        </div>
    </div>
</div>
<style>
.btn-pink {
  background-color: #e83e8c;
  border-color: #e83e8c;
  color: white;
}

</style>
<?php
$username = isset($_POST['username']) ? $_POST['username']: exit();
$password = isset($_POST['password']) ? $_POST['password']: exit();

$stmt = $pdo->prepare('INSERT INTO usuario (username,password) VALUES(:username, :password)');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

?>
