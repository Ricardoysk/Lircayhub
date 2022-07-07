<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Votación</title>


<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">

</head>


<style>
  
body{

background-image: url(img/voto.jpg);


background-size: 100%;


  
}


.contenedor{

border-color: black;
border:20px;
margin-top: 20px;
margin: 50px auto;
border-radius: 10px;
margin-right: 20%;
margin-left: 20%;
width: 60%;
height: 500px;




}

.contenedor:hover{

transition: .8s;
background-color:rgba(0,0,0 ,.2);
box-shadow:inset;
   

}



.boton{

float: right;

}

</style>

<body>


<div class="contenedor">
		<div class="boton">
	<a href="votar.php"><button  class="btn btn-danger">X</button></a>
    </div>
  <br><br><br><br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center"><font color="white" size="7" face="Algerian">SISTEMA DE Votación</font></h1>
    </div>
  </div>

</div>

 <div class="center-block col-md-12 col-xs-8">
     <h2><font color="white" size="5"><center>Bienvenido Al Modulo de  Administración</center></font></h2>
<br>
<br>

<center>
     <a href="colaborador.php"><button class="btn btn-primary">  <font size="4">Agregar colaborador</font></button></a>
     <a href="tema.php"><button class="btn btn-success">  <font size="4">Agregar Tema</font></button></a>
     <a href="resultados.php"><button class="btn btn-warning">  <font size="4">Resultados</font></button></a>
     <a href="votar.php"><button class="btn btn-danger">  <font size="4">Votación</font></button></a>
</center>



</div>
</div>

</div>

<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap.js"></script>
</body>
</html>
