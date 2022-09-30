
<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <link rel="icon" type="image/png" href="img/enohsa.png">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/carga.css">
    <link rel="stylesheet" href="../css/centrar.css">
    <link rel="stylesheet" href="../css/comunicados.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/home.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <div id="carouselExampleDark" class="carousel carousel-dark slide carousel2" data-bs-ride="carousel">
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

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>