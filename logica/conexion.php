<?php 

    $conex = mysqli_connect("localhost","root","","eva_3_tm");

?>

<?php

    function conectar(){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "eva_3_tm";

    $conn=mysqli_connect($server,$username,$password);

    mysqli_select_db($conn,$database);

    return $conn;

}
?>