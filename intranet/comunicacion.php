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
    <title>ENOHSAintranet</title>
    <link rel="icon" type="image/png" href="img/enohsa.png">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include ('includes/navbar.php') ?>
 <!--REDES SOCIALES-->
 <div class="redes0">
 <div class="redes"> 
 <a class="redes2" href="https://www.facebook.com//EnohsaGob" target="blank"><i class="fa-brands fa-facebook-square"></i></a><br>

 <a class="redes3" href="https://www.instagram.com/enohsa/" target="blank"><i class="fa-brands fa-instagram"></i></a><br>

 <a class="redes3" href="https://www.youtube.com/channel/UCAKE8sy7VLvU_qOOfAP0cAg" target="blank"><i class="fa-brands fa-youtube"></i></a><br>
 
 <a class="redes3" href="https://twitter.com/enohsa" target="blank"><i class="fa-brands fa-twitter-square"></i></a><br>
 
 <a class="redes3" href="https://api.whatsapp.com/send?phone=541122448643" target="blank"><i class="fa-brands fa-whatsapp"></i></a>
 </div>
 </div> 
<!--SECCIONES-->
<div class="secciones">
<!--<a class="links" href=""><strong>Formularios</strong></a>
<a class="links2" href=""><strong>Reglamentos</strong></a>
<a class="links3" href=""><strong>Informes</strong></a>-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">  Sección 1</a></li>
    <li class="breadcrumb-item"><a href="#"> &nbsp Sección 2</a></li>
    <li class="breadcrumb-item"><a href="#"> &nbsp Sección 3</a></li>
  </ol>
</nav>
</div>

 <!-- COMUNICADOS -->
 <?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comucomu ORDER BY fecha DESC";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>

<div class="comu ">
<div class="imagen-com">
<div class="fecha-comu"><p><strong><?php echo $row['fecha']; ?></strong></p></div>
<div class="titulo"><h4><?php echo $row['titulo']; ?></h4></div> 
<div class="texto-comu"><pre class="texto-comu2"><strong><?php echo $row['texto']; ?></strong></pre></div>
</div>
</div>
<div class="espacio"></div>
<hr>
<br><br>
<?php
        }
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>   
</body>
<?php include ('includes/footer.php') ?>
<script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>