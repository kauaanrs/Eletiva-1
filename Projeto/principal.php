<?php
    session_start();
    if(!isset($_SESSION['acesso']) || $_SESSION['acesso'] == false){
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Seja Bem-vindo <?= $_SESSION['nome'] ?>!</p>
    <p><a href="logout.php">Sair do Sistema</a></p>

</body>
</html>