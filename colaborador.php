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
        <li><a href="colaborador.php">Agregar Colaborador</a></li>
      <li><a href="tema.php">Agregar Tema</a></li>
        <li><a href="resultados.php">Resultados</a></li>
          <li><a href="votar.php">Votación</a></li>  
      </ul>

  </div>
    </div>

  </div>

</nav>

<?php
   require_once("conexion.php");

    
		error_reporting(E_ALL ^ E_NOTICE);
$vacio = isset($_POST['variable']) ? $_POST['variable'] : null ;
    $acceso = isset($_POST['variable']) ? $_POST['variable'] : null ;
	 session_start();
        $num=$_SESSION["num_colab"];
  
 if (empty($acceso)) {
   
}
       if (isset($_POST["nomb_colab"])){
	 $nomb_colab=$_POST["nomb_colab"];
	}else{
	$nomb_colab="";
	}

if (isset($_POST["num_colab"])){
	 $num_colab=$_POST["num_colab"];
	}else{
	$num_colab="";
	}
 if (isset($_POST["nomb_colab"])) {
    $nomb_colab=$_POST["nomb_colab"];
}
     if (isset($_POST["cod_tema"])) {
    $cod_tema=$_POST["cod_tema"];
}
     if (isset($_POST["num_colab"])) {
    $num_colab=$_POST["num_colab"];
}


if (isset($_POST["boton"])) {
    $boton=$_POST["boton"];
	switch ($boton) {
            
		case "guardar": 
	
            if (empty($num_colab)){
	?>
			
			<script>
			alert('Ingrese su número de identidad');
			</script>
			<?php
			
			break;
	
	}
	if (! is_numeric($num_colab)){
	?>
			
			<script>
			alert('Por favor colocar solo número de identidad');
			</script>
			<?php
			
			break;
	
	}
                        if (empty($nomb_colab)){
	?>
			
			<script>
			alert('ingrese Nombre y apellido');
			</script>
			<?php
			
			break;
	
	}
            
	
            
		$sql="insert into colaborador (num_colab,nomb_colab,cod_tema,voto) values ('$num_colab','$num_colab','0','0') ";
		$resultado=mysqli_query($cx,$sql);
       if ($resultado){
           	$acceso="aprobado";
			?>
		
			
			<?php
			}
		$num_colab="";
		$nomb_colab="";
		$cod_tema="";
		$voto="";
	$clavev="";
		break;
            
  }
}

?>



<div class="contenedor">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center"><font color="white" size="7" face="Algerian">Registro de colaboradores</font></h1>
    </div>
  </div>

</div>

 <div class="center-block col-md-4 col-xs-8">
	
<form name ="acceso" action="alumnos.php" role="form" method="post">
  <div class="form-group">


					<br>
  <div class="form-group">
    <label for="Usuario"><font color="white" size="4">Numero de Colaborador</font></label>
    <input type="text" name="cedula" class="form-control" id="cedula" placeholder="">
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1"><font color="white" size="4"><center>Nombre y apellido</center></font></label>
    <input type="text" name="nombre" class="form-control" id="nombre"  placeholder="">
  </div>
		

<br> <input type ="submit" class="btn btn-primary" name="boton" Value="guardar">


							 <input type ="submit"  class="btn btn-danger" name="boton" Value="Cancelar">
</form>


</div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap.js"></script>
</body>
</html>
