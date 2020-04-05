<?php
require 'db/config.php';

$id = filter_input(INPUT_GET,'id');

if ($id) {
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();
}
header("Location: index.php");
exit;
?>