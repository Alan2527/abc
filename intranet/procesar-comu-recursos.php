<?php
include "conexion.php";

$id=$_POST['id'];
$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];

mysqli_query($conexion, "UPDATE `comurecursos` SET `fecha` = '$fecha' , `titulo` = '$titulo' , `texto` =  '$texto' WHERE `id` = '$id'")or die("error al actualizar");

mysqli_close($conexion);
header("location:cargas-recursos.php");

?>