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


<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="home.php"><img class="navbar-brand" src="img/logos_enohsa_mop.png" alt="Logo ENOHSA"></a>
  <div>
  <ul class="cent-nav">
  <li class="nav-item nav-item2">
  <a class="inicio" href="home.php"><i class="fa-solid fa-house"></i> Inicio</a>
  </li>
  <li class="nav-item">
  <a class="perfil" href="perfil.php"><i class="fa-solid fa-user"></i> Perfil</a>
  </li>
<!-- Boton crear nuevo usuario -->
  <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="nuevo-usuario.php"><i class="fa-solid fa-user-plus"></i>Nuevo Usuario</a>
  </li>
  <?php endif; ?>
<!--Boton de carga recursos humanos -->
   <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-recursos.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <!--Boton de carga observatorio de género -->
     <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-observatorio.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <!--Boton de carga SGBATOS -->
       <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-sgbatos.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <!--Boton de carga comunicación y diseño -->
  <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-comunicacion.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <!--Boton de carga informática -->
       <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-informatica.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <!--Boton de carga seguridad e higiene -->
       <?php if($_SESSION['id_usuario']==2): ?>
  <li class="nav-item">
  <a class="cargas" href="cargas-seguridad.php"><i class="fa-solid fa-upload"></i> Cargas</a>
  </li>
  <?php endif; ?>
  <li class="nav-item">
  <a href="login/logout.php" class="cerrar"><i class="fa-solid fa-power-off"></i> Cerrar</a>
  </li>
  </ul>
  </div>
  </div>
</nav>
<br>
<div class="botonera">
  <nav class="botonera3">
    <ul class="botonera2">
    <li class="list-bot"><a class="btn btn-primary btn3 btn4" href="recursoshumanos.php"><strong>Recursos Humanos</strong></a>
    <li class="list-bot"><a class="btn btn-primary btn3 btn4 " href="genero.php"><strong>Observatorio de Genero</strong></a></li>
    <li class="list-bot"><a class="btn btn-primary btn3 btn4 " href="sgbatos.php"><strong>SGBATOS</strong></a></li>
    <li class="list-bot"><a class="btn btn-primary btn3 btn4" href="comunicacion.php"><strong>Comunicación</strong></a></li>
    <li class="list-bot"><a class="btn btn-primary btn3 btn4" href="informatica.php"><strong>Informática</strong></a></li>
    <li class="list-bot"><a class="btn btn-primary btn3 btn4" href="seguhigiene.php"><strong>Seguridad e Higiene</strong></a></li>

    </ul>
  </nav>
</div>
</header>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
