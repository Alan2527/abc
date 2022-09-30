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

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENOHSA intranet</title>
    <link rel="icon" type="image/png" href="../img/enohsa.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carga.css">
    <link rel="stylesheet" href="css/centrar.css">
    <link rel="stylesheet" href="css/comunicados.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
</head>
<body >
<?php include ('includes/navbar.php') ?>
    
        
<div class="body-perfil">
<h1 class="h1perf" style="text-align:center">Mi Perfil<hr></h1>
<div class="datos">
<div class="perf">
<img class="img-perfil" src="imagen/foto_<?php echo $row['id']; ?>.jpg?<?php echo rand(0,1000); ?>" alt="">
</div>
<div class="info">
  <div class="info2">
<p class="nomyape"><strong><?php echo $row['nombre']. " " . $row['apellido'] ?></strong></p>
  </div>
  <div class="info3">
<p class="sect"><strong><?php echo $row['sector'] ?></strong></p><br>
<p class="subsect"><?php echo $row['subsector']. "  " . $row['subsector2'] ?></p><br>
<p class="eml"><?php echo $row['email'] ?></p><br><br><br>
<p class="num"><?php echo $row['interno'] ?></p><br><br><br>
<p class="num"><?php echo $row['fecha'] ?></p><br>
</div>

<a class="btn btn-primary btn-enviar btn1322" href="editar.php?id=<?php echo $row['id']; ?>">Editar Perfil</a>
<a class="btn btn-primary btn-enviar btn1322" href="buscar.php">Buscar Perfil</a>
</div>
</div>
<br><br><br><br>
          </div>
<?php include ('includes/footer.php') ?>
<script src="../js/usuarios.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>