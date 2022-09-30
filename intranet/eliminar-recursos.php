<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

$id=$_GET['id'];

$sql="DELETE FROM comurecursos WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: cargas-rrhh.php");
    }
?>