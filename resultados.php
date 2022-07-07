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



</style>



<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid"> 

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
     </div>

    <div class="collapse navbar-collapse" id="defaultNavbar1">
     <div class="menu1 col-md-7 col-md-offset-3">
      <ul class="nav navbar-nav">
        <li class="active">
        <li><a href="colaborador.php">Agregar Colaboradores</a></li>
      <li><a href="tema.php">Agregar Temas</a></li>
        <li><a href="resultados.php">Resultados</a></li>
          <li><a href="index.php">Votación</a></li>  
      </ul>

  </div>
    </div>

  </div>

</nav>

<div class="contenedor">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center"><font color="white" size="7" face="Algerian">RESULTADO DE VOTACIONES</font></h1>
    </div>
  </div>

</div>

 <div class="center-block col-md-8 col-xs-8">

<form name ="acceso" action="resultados.php" role="form" method="post">
  <div class="form-group">
  
 
 
<br>

<table class="table table-hover table-striped text-center"border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
<thead>
<tr>
<td><font face="verdana"><b>Numero del tema</b></font></td>
<td><font face="verdana"><b>Nombre del tema</b></font></td>
<td><font face="verdana"><b>Votos</b></font></td>
</tr>
    </thead>
<div class="tabla">

</table>


</form>




</div>
</div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap.js"></script>
</body>
</html>
