<?php

include('conexao.php');

if (!isset($_SESSION))
    session_start();

if (!isset($_SESSION['usuario']))
    die('Você não está logado. <a href="sistema_login.php">Clique aqui</a> para logar.');

if (isset($_GET['busca'])) {
    $busca = $_GET['busca'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>Projeto Modelo PHP</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <img class="logo" src="./assets/img/PHP1.jfif" alt="logophp">
        <nav class="container-menu">
            <ul class="list-menu">
                <a class="link" href="Index.php">
                    <li>Home</li>
                </a>
                <a class="link" href="sistema_login.php">
                    <li>Login</li>
                </a>
                <a class="link" href="cadastrar_usuario.php">
                    <li>Cadastro Usuario</li>
                </a>                
                <a class="link" href="sistema_logout.php">
                    <li>Sair</li>
                </a>
            </ul>
        </nav>
    </header>

    
</body>

</html>