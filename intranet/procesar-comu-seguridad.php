<?php
include "conexion.php";

$id=$_POST['id'];
$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];

mysqli_query($conexion, "UPDATE `comusegu` SET `fecha` = '$fecha' , `titulo` = '$titulo' , `texto` =  '$texto' WHERE `id` = '$id'")or die("error al actualizar");

mysqli_close($conexion);
header("location:cargas-seguridad.php");

?>