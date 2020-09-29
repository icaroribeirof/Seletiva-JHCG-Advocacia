<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/icon.png"/>
    <script type="text/javascript"></script>

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


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 100%" src="img/entregas.jpg" alt="">
      <div class="carousel-caption">
    <h3 style="margin-top: -300px">Fazemos entregas em todo o Brasil!</h3>
    <p>Entre em contato conosco para mais informações</p>
  </div>
    </div>
    <div class="carousel-item">
      <img style="width: 100%" src="img/entregas1.jpg" alt="">
      <div class="carousel-caption">
    <h3 style="margin-top: -300px">Fazemos entregas em todo o Brasil!</h3>
    <p>Entre em contato conosco para mais informações</p>
  </div>
    </div>
    <div class="carousel-item">
      <img style="width: 100%" src="img/entregas2.jpg" alt="">
      <div class="carousel-caption">
    <h3 style="margin-top: -300px">Fazemos entregas em todo o Brasil!</h3>
    <p>Entre em contato conosco para mais informações</p>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>


<footer class="bg-primary text-center fixed-bottom">
    <p><b style="color: white">Feito por Ícaro Ribeiro ® Todos os Direitos Reservados</b></p>
</footer>