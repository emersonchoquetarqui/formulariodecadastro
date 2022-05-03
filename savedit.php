<?php

include_once 'config.php';

if(isset($_POST['update'])){

 $id = $_POST['id'];
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
 $telefone = $_POST['telefone'];
 $genero = $_POST['genero'];
 $data_nascimento = $_POST['data_nascimento'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];
 $endereco = $_POST['endereco'];

 $sqlUpdate = "UPDATE users SET nome='$nome', email='$email', senha='$senha', telefone='$telefone', genero='$genero', data_nasc='$data_nascimento', cidade='$cidade', estado='$estado', nome='$nome', endereco='$endereco' WHERE id='$id'";

 $result = $conexao->query($sqlUpdate);

}

header('Location:sistema.php');

?>