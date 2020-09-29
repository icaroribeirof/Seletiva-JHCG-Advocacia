<?php

include_once("config/conexao.php");

$nome = $_POST['nome'];
$foto = $_POST['foto'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "insert into entregador (nome,foto,cpf,data_nascimento) values ('$nome','$foto','$cpf','$data_nascimento')";
$cadastrar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/icon.png"/>

    <style>

        body{
            background-color: black;
        }
        nav {
            height: 50px;
            margin-top: 0;
            margin-bottom: 0;
            padding: 0;
        }

        .conteudo {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 180px;
        }

        footer {
            padding-top: 14px;
            height: 50px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: black;
            color: white
        }

    </style>
</head>
<body>
<nav style="background-color: #007FFF" class="navbar navbar-expand-lg fixed-top">
    <a style="color: white" class="navbar-brand" href="index.php"><b>PROCESSO SELETIVO</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><b>Início</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadCliente.php"><b>Cad. Clientes</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadEntregador.php"><b>Cad. Entregadores</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="entregadores.php"><b>Lista Entregadores</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="entregas.php"><b>Lista Entregas</b></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="text-success mr-sm-2">&nbsp;</span>
            <a style="background-color: black; color: white" class="btn" href="index.php"><b>Sair</b></a>
        </form>
    </div>
</nav>

<br>
<br>
<br>

<center><section>
    <h1 style="color: white; padding: 70px">Confirmação de Cadastro</h1>
    <hr><br><br>

    <?php

    if($linhas == 1){
        echo "<font color= 'white'>O cadastro foi realizado com sucesso!</font>";
    }else{
        echo "<font color= 'white'>O cadastro NÃO foi realizado!<br>Já existe um usuário cadastrado utilizando o mesmo CPF.</font></br>";
    }


    ?>

</section>

<footer class="bg-primary text-center fixed-bottom">
    <p><b style="color: white">Feito por Ícaro Ribeiro ® Todos os Direitos Reservados</b></p>
</footer>

</body>
</html>