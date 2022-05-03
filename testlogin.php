<?php

session_start();

if (isset($_POST['submit']) and !empty($_POST['email']) and !empty($_POST['senha'])) {

    include_once 'config.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // echo $email . "<br>";

// Esta trecho é somente de banco de dados

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conexao->query($sql);
    $usuario = $result->fetch_assoc();

    // print_r($usuario);

    if (password_verify($senha, $usuario['senha'])) {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $usuario['nome'];
        header('Location:sistema.php');

    } else {

        session_destroy();
        header('Location:login.php');
    }
} else {
    header('Location:login.php');
}
