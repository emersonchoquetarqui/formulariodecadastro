
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teste Nivelamento </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;

        }
        h1,h2{
            font-family: ferro;
            font-size: 4rem;
            font-weight: 200;
            margin: 10px 0px;
            position: relative;
        }

        h1::before{
            content:"";
            display: inline-block;
         width: 100px;
         height:100px;
         position: absolute;
         top: 0px;
         left: 25%;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        @font-face {
            font-family: ferro;
            src: url("Iron.ttf");
        }
    </style>
</head>
<body>
    <h1>Teste Emerson Choquetarqui</h1>
    <h2>Sistema de Formulario de Cadastro de Usuarios</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
