<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Entrega</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/icon.png"/>
    <script type="text/javascript">
    function formatar_mascara(src, mascara) {
    var campo = src.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(campo);
    if(texto.substring(0,1) != saida) {
    src.value += texto.substring(0,1);
        }
    }
</script>

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

<form style="padding: 50px" method="post" action="update.php">
        <div class="form-group">
            <center><h3 style="color: white"><b>Edite sua entrega:</b></h3></div></center>
                <center><label style="color: white" for="name">Selecione o produto desejado:</label></center>
                    <center><select style="width: 50%" class="form-control" name="nome" required autofocus>
                        <option>Notebook</option>
                        <option>Mouse</option>
                        <option>Teclado</option>
                        <option>Monitor</option>
                        <option>Envelope</option>
                    </select></center>
        </div>

        <div class="form-group">
            <center><label style="color: white; margin-top: 10px" for="data_entrega">Selecione a data de entrega desejada:</label></center>
                <center><input style="width: 50%" type="datetime-local" name="data_entrega" class="form-control">
        </div>

        <div class="form-group">
            <center><label style="color: white" for="endereco_entrega">Digite o endereço de destino do produto:</label></center>
                <center><input style="width: 50%" type="text" name="endereco_entrega" class="form-control" maxlength="255" placeholder="Ex.: Rua Cardeal Stepinac 844 - Cidade Nova, Belo Horizonte - MG" required>
        </div>

        <div class="form-group">
            <center><label style="color: white" for="valor_entrega">Digite o valor do produto:</label></center>
                <center><input style="width: 50%" type="text" name="valor_entrega" class="form-control" maxlength="255" placeholder="Ex.: 100.00" required>
        </div>

        <center><div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-outline-primary">
                <input type="reset" value="Limpar" class="btn btn-outline-danger">
                </div></center>
            </form>

<footer class="bg-primary text-center fixed-bottom">
    <p><b style="color: white">Feito por Ícaro Ribeiro ® Todos os Direitos Reservados</b></p>
</footer>

</body>
</html>