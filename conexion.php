<?php 

$servername="localhost";
$user="root";
$password="9514697";
$db="well_mind_db";
$port=3307;

$conexion=new mysqli($servername,$user,$password,$db,$port);

if($conexion->connect_error){
    die("Conexion fallida".$conexion->connect_error);
}
?>