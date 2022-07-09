

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page HTML | AlexCG Design</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloindex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <a class="nav-link text-white" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Galería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Iniciar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <header class="hero">
        <div class="textos-hero">
            <h1>Bienvenido a Lircay Hub</h1>
            <p>Creamos el mejor sitio web de votaciones para ti</p>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>


    <section class="wave-contenedor website" id="nosotros">
        <img src="img/ilustracion1.svg" alt="">
        <div class="contenedor-textos-main">
            <h2 class="titulo left" >Nosotros</h2>
            <p class="parrafo">Somos una plataforma web con el propósito de compartir información que puede ser de tu agrado, permitiendo votar por la que mas te guste, comentar, debatir y compartir temas adicionales. Idealizando una nueva forma de interactuar con los distintos pensamientos generando la comunicación garantizando un correcto uso del lenguaje excluyendo palabras ofensivas. Esperamos que disfruten el contenido.</p>
        </div>
    </section>

    <section class="info">
        <div class="contenedor">
            <h2 class="titulo left">Juntos podemos apoyar</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>

    <section class="cards contenedor">
        <h2 class="titulo">Our services</h2>
        <div class="content-cards">
            <article class="card">
                <i class="far fa-clone"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
            <article class="card">
                <i class="fas fa-database"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
            <article class="card">
                <i class="far fa-object-group"></i>
                <h3>Title Card</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="" class="cta">Learn more</a>
            </article>
        </div>
    </section>

    <section class="galeria">
        <div class="contenedor">
            <h2 class="titulo">Our work</h2>
            <article class="galeria-cont">
                <img src="img/uno.jpg" alt="">
                <img src="img/dos.jpg" alt="">
                <img src="img/tres.jpg" alt="">
                <img src="img/cuatro.jpg" alt="">
                <img src="img/cinco.jpg" alt="">
                <img src="img/seis.jpg" alt="">
            </article>
        </div>
    </section>

    <section class="info-last">

        <div class="contenedor last-section">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Title of section</h2>
                <p class="parrafo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum reprehenderit nostrum expedita quasi odio architecto laudantium sunt nemo dicta atque?</p>
                <a href="" class="cta">Learn more</a>
            </div>
            <img src="img/ilustracion.svg" alt="">
        </div>
        
        <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #f5576c;"></path>
        </svg></div>
    </section>

    <footer id="contacto">
        <div class="contenedor">
            <h2 class="titulo">Contact us</h2>
            <form action="" class="form">
                <input class="input"  type="text" name="" id="" placeholder="Nombre">
                <input class="input"  type="email" name="" id="" placeholder="Email">
                <textarea  class="input" name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                <input class="input"  type="submit" value="Enviar">
            </form>
        </div>
    </footer>

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