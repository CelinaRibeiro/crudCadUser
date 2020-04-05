<?php 
require 'db/config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if ($id && $nome && $email) {
    $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    header("Location: index.php");
    exit;
}else{
    header("Location: adicionar.php");
    exit();
}
?>



