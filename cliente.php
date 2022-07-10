<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador Lircay Hub</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloindex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- formulario -->
    <link rel="stylesheet" href="css/estilosformulario.css">


    
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">Lircay Hub</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button><!-- boton nav -->

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="cliente.php">Inicio</a>
          </li>

		      <li class="nav-item">
            <a class="nav-link text-white" href="temacliente.php">Vota</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="temasclientesagre.php">Agrega Temas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="temaspublicos.php">Temas publicados</a>
          </li>

          <li class="nav-item">
             <a class="nav-link text-white" href="logout.php?cerrar_session=1">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <header class="hero">
        <div class="textos-hero">
            <h1>Bienvenido Cliente</h1>
        </div>
    </header>


    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
        } else {
            nav.classList.remove('bg-dark', 'shadow');
        }
        });
    </script>
</body>

</html>
