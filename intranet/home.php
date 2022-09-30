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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENOHSAintranet</title>
    <link rel="icon" type="image/png" href="img/enohsa.png">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include ('includes/navbar.php') ?>
    <!---->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
 <!-- Slider RRHH -->
 <div class="carousel-inner">
  <?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comurecursos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
    <div class="carousel-item active" data-bs-interval="4000">
    <img class="img6" src="includes/img/fijado-recursos.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">
      <div class="carousel-caption d-none d-md-block">
        <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
        <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
    </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>  
<!-- Slider Género -->
<div class="carousel-item" data-bs-interval="4000">
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comuident ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
      <img class="img6" src="includes/img/fijado-genero.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">
      <div class="carousel-caption d-none d-md-block">
      <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
      <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
      </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>  

     <!-- Slider SGBATOS -->
     <div class="carousel-item" data-bs-interval="4000">
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comusgbatos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
      <img class="img6" src="includes/img/fijado-sgbatos.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">
      <div class="carousel-caption d-none d-md-block">
      <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
      <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
      </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
         <!-- Slider Comunicación y Diseño -->
      <div class="carousel-item" data-bs-interval="4000">
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comucomu ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
      <img class="img6" src="includes/img/fijado-comunicacion.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">
      <div class="carousel-caption d-none d-md-block">
      <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
      <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
      </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>  
    
      <!-- Slider Informática -->
      <div class="carousel-item" data-bs-interval="4000">
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comuinfo ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
      <img class="img6" src="includes/img/fijado-informatica.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">
      <div class="carousel-caption d-none d-md-block">
      <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
      <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
      </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
           
      <!-- Slider Seguridad e Higiene -->
      <div class="carousel-item" data-bs-interval="4000">
      <?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comusegu ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
       while ($row = $resultado->fetch_assoc()){
      ?>
      <img class="img6" src="includes/img/fijado-seguridad.png" class="d-block w-100" alt="<?php echo $row['texto']; ?>">-->

      <div class="carousel-caption d-none d-md-block">
      <p class="fechafijado"><strong><?php echo $row['fecha']; ?></strong></p>
      <h1 class="titfijado"><strong><?php echo $row['titulo']; ?></strong></h1>
        <p class="textofijado corte4"><strong><?php echo $row['texto']; ?></strong></p>
      </div>
    </div>
    <?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!---->
    <?php include ('includes/body.php') ?>
    <?php include ('includes/footer.php') ?>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>