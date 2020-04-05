<?php
require 'db/config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($nome && $email) {
    $sql = "SELECT * usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    if ($sql->rowCount() === 0) {
        $sql = "INSERT INTO usuarios SET nome = :nome, email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        header("Location: index.php");
        exit;
    }else{
        header("Location: adicionar.php");
        exit;
    }
}else{
    header("Location: adicionar.php");
    exit;
}

?>
