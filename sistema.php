<?php
session_start();
include_once 'config.php';
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    session_destroy();
    header('Location:login.php');
} else {
    $logadoemail = $_SESSION['email'];
    $logadonome = ucfirst($_SESSION['nome']);
}

if(!empty($_GET['search'])){

  $data=$_GET['search'];
  $sql= $sql = "SELECT * FROM users WHERE id  LIKE '%$data%' OR nome LIKE '%$data%' ORDER BY nome ASC";

}else{
  $sql = "SELECT * FROM users ORDER BY nome ASC";
}


$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=h1, initial-scale=1.0">
  <title>Document</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
   body{

            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        h1{
          color: white;
          text-align: center;
          margin: 10px auto;
        }

        .table-bg{
            background: rgba(0, 0, 0, 0.4);
            border-radius: 15px 15px 0px 0px;

        }

        .bb{
        margin: 30px 30px;


        }

        .box-search{
          display: flex;
          justify-content: center;
          gap: 2px;
        }


       tbody tr:hover{
          background: rgba(0, 0, 0, 0.8);
          cursor:pointer;
        }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA DE TESTE DO EMERSON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>

<?php

echo "<h1> Seja bem vindo $logadonome <br><br>
O Seu email ??: $logadoemail </h1>";

?>
<br>
<div class="box-search">
<input type="search" id="pesquisar" placeholder="Pesquisar" class="form-control w-25">
<button class="btn btn-warning" onclick="searchData()">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
</div>
<div class="bb">
<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Genero</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endere??o</th>
      <th scope="col">A????es</th>
      </tr>
  </thead>
  <tbody>
    <?php
while ($user_data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $user_data['id'] . "</td>";
    echo "<td>" . $user_data['nome'] . "</td>";
    echo "<td>" . $user_data['email'] . "</td>";
    echo "<td>" . $user_data['telefone'] . "</td>";
    echo "<td>" . $user_data['genero'] . "</td>";
    echo "<td>" . $user_data['data_nasc'] . "</td>";
    echo "<td>" . $user_data['cidade'] . "</td>";
    echo "<td>" . $user_data['estado'] . "</td>";
    echo "<td>" . $user_data['endereco'] . "</td>";
    echo "<td>
          <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg></a>
        <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
      </svg></a>
          </td>";
    echo "</tr>";

}

?>
  </tbody>
</table>
</div>

<!-- JAVASCRIPT -->
<script>

var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event){
  if(event.key == "Enter"){
    searchData();
  }
});

function searchData(){
  window.location = 'sistema.php?search='+search.value;
}


</script>

</body>
</html>
