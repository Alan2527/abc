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
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"> Beneficios</a>
    <ul class="menu">
      <li class=""><a href="#">Contacto ejecutivos de cuenta Osde</a></li><br>
      <li class=""><a href="#">Ameport - Mutual de Personal del Estado Nacional, Provincial, Municipal y Afines. Mat. CF 353</a></li>  <br>
    </ul>
    </li>
    <li class="breadcrumb-item"><a href="#"> &nbsp Manuales</a>
    <ul class="menu">
      <li class=""><a href="#">SiRADIG-F 572</a></li><br>
      <li class=""><a href="#">Manual de uso de licencias</a></li><br>
    </ul>
    </li>
    <li class="breadcrumb-item"><a href="#"> &nbsp Politicas y programas</a>
    <ul class="menu">
      <li class=""><a href="#">Becas</a></li><br>
      <li class=""><a href="#">Capacitaciones</a></li>  <br>
    </ul>
    </li>
    <li class="breadcrumb-item"><a href="#">&nbsp Formulario único de lecencias</a></li>
  </ol>
</nav>
</div>

 <!-- COMUNICADOS -->
 <?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comurecursos ORDER BY fecha DESC";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
 
<div class="comu ">
<div class="imagen-rrhh">
<div class="fecha-comu"><p><strong><?php echo $row['fecha']; ?></strong></p></div>
<div class="titulo"><h4><?php echo $row['titulo']; ?></h4></div>
<div class="texto-comu"><p class="texto-comu2"><strong><?php echo $row['texto']; ?></strong></p></div>
</div>
</div>
<div class="espacio"></div>
<hr>
<?php
        }
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
<!-- MODAL -->
<div class="modal" tabindex="-1" id="modalc">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Realizar consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><br>
      <div class="modal-body">
      <?php $sql = "SELECT * FROM usuarios WHERE id='$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc(); ?>
      <form action="enviar-consulta.php" method="POST">
        <input type="email" name="correo" id="email" value="<?php echo $row['email'] ?>" readonly><br>
        <input type="text" name="asunto" id="asunto" placeholder="Asunto de la consulta"><br><br>
        <textarea name="consulta" id="consulta" cols="60" rows="10" placeholder="Escriba su consulta..."></textarea><br><br>
        <input class="btn-primary" type="submit" value="Enviar">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
</body>
<?php include ('includes/footer.php') ?>
<script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>