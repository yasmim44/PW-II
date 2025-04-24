<?php
//configuraçao da conexao com BD
$host = 'localhost';
$database = 'escola';
$user = 'root';
$password = '';

try{ //tenta executar
    //do plugin PHP PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user, $password);
}catch (PDOException $erro){ //captura o erro
    die("Erro de conexao:" . $erro->getMessage);
 }





?>