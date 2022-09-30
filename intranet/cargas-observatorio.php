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

if($_SESSION['id_usuario']<>2){
    header ("location: home.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear comunicado</title>
    <link rel="icon" type="image/png" href="img/enohsa.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carga.css">
    <link rel="stylesheet" href="css/centrar.css">
    <link rel="stylesheet" href="css/comunicados.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
</head>
<body class="body1">
    <header>
    <img src="img/logos_enohsa_mop.png" alt="Logo ENOHSA">
    <a class="btn btn-danger btn-enviar btn4 btn-crearcomu btn-crearcomu2" href="home.php"><strong>Volver</strong></a>
    <a class="btn btn-primary btn-enviar btn4 btn-crearcomu btn-crearcomu3" href="formulario-observatorio.php"><strong>Crear Nuevo Comunicado</strong></a>
</header>

<div class="tit-comu"><h1 class="titulo-comu"><strong>Observatorio de género</strong></h1></div>
 <div class="contenedor10">
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        $query = "SELECT * FROM comuident ORDER BY fecha DESC";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>

<div class="card card7 border-info mb-3" style="max-width: 25rem; min-width: 25rem; padding: 5px !important; ">
  <div class="card-header"><?php echo $row['fecha']; ?></div>
  <div class="card-body">
    <h5 class="card-title card-title7"><?php echo $row['titulo']; ?></h5>
    <p class="card-text corte6"><?php echo $row['texto']; ?></p>
  </div>
  <div class="botones7">
  <a class="btn btn-primary btn-enviar btn4 btn42" href="editar-comu-observatorio.php?id=<?php echo $row['id']; ?>"> Editar</a>
  <a class="btn btn-danger btn-enviar btn4 btn42" href="eliminar-observatorio.php?id=<?php echo $row['id']; ?>">Eliminar</a>
</div>
</div>

<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?> 
</div>

 <!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<?php include ("includes/footer.php"); ?>
</body>
</html>