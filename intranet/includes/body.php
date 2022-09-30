<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/carga.css">
<link rel="stylesheet" href="css/centrar.css">
<link rel="stylesheet" href="css/comunicados.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/home.css">
<!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>
<body class="body10">
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
<!-- ÚLTIMOS COMUNICADOS -->
<h2 class="novedades"><strong>Novedades +</strong></h2><br>
<div class="ultimos">

<!-- recursos humanos -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comurecursos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-recursos.png" class="cenimg card-img-top " alt="<?php echo $row['texto']; ?>">
  <div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="recursoshumanos.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
<!-- Observatorio de genero -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comuident ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-observatorio.png" class="card-img-top cenimg" alt="<?php echo $row['texto']; ?>">
  <div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="genero.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
<!-- sgbatos -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comusgbatos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-sgbatos.png" class="card-img-top cenimg" alt="<?php echo $row['texto']; ?>">
<div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="sgbatos.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?> 
<!-- comunicación -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comucomu ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-comunicacion.png" class="card-img-top cenimg" alt="<?php echo $row['texto']; ?>">
<div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="comunicacion.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?> 
<!-- informática -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comuinfo ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-informatica.png" class="card-img-top cenimg" alt="<?php echo $row['texto']; ?>">
<div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="informatica.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?> 
<!-- seguridad e higiene -->
<?php
      //CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA
        include ("conexion.php");
        $query = "SELECT * FROM comusegu ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->query($query);
      
        while ($row = $resultado->fetch_assoc()){
      ?>
<div class="card card2" style="width: 20rem;">
<img src="includes/img/comunicado-seguridad.png" class="card-img-top cenimg" alt="<?php echo $row['texto']; ?>">
<div class="card-body">
  <div class="box3">
  <p class="card-title card-title2 corte" style="font-size:10px;"><?php echo $row['texto']; ?></p>
  </div> 
  <div class="box2">
    <h5 class="card-title card-title55 corte2"><?php echo $row['titulo']; ?></h5>
    </div>
   
    <div class="box1">
    <p class="card-text fecha2" style="float:right; font-size:12px; margin-top:20px"><?php echo $row['fecha']; ?></p>
    <a href="seguhigiene.php" class="btn btn-primary btn3 btn-primary55">Ver más</a>
    </div>
  </div>
</div>
<?php
}
        //FIN CODIGO PHP PARA BUCLE IMPRIMIR DATOS DE LA BASE DE DATOS EN PANTALLA 
        ?>
</div>
<br><br><br><br><br><br>
<!--VIDEOS DE YOUTUBE-->
<h2><strong>En YouTube</strong></h2>
<div class="youtube">

<div class="youtube1"><iframe width="560" height="315" src="https://www.youtube.com/embed/_m_vN9sVZuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div class="youtube2"><iframe width="560" height="315" src="https://www.youtube.com/embed/iqOkcjLHdsU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<aside class="youtube3"><iframe width="560" height="315" src="https://www.youtube.com/embed/h4wN90tiQwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></aside>
</div>

</body>

