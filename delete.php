<?php

include_once "config.php";

if(!empty($_GET['id'])){

$id=$_GET['id'];
$sqlselect = "SELECT * FROM users WHERE id=$id";
$result = $conexao->query($sqlselect);

if($result->num_rows > 0){

 $sqldelete = "DELETE FROM users WHERE id=$id";
 $final = $conexao->query($sqldelete);
}

}


header('Location:sistema.php');