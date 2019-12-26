<?php
    require('conexao.php');
    $id = $_GET['id'];
    $deleta = $pdo->query("DELETE FROM carros WHERE id = $id");
    header("Location: rmv.php");
?>