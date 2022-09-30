<?php 
 include 'conexion.php';
 session_start();
 if(!isset($_SESSION['id_usuario'])){
     header ("location:index.php");
 }
 $iduser = $_SESSION['id_usuario'];
 
 $sql = "SELECT * FROM usuarios WHERE id='$iduser'";
 $resultado = $conexion->query($sql);
 $row = $resultado->fetch_assoc();
 
$id=$_GET['id'];

$sql="DELETE FROM comucomu  WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        
        Header("Location: cargas-comunicacion.php");
    }
?>