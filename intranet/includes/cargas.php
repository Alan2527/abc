<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  ?>
<!doctype html>
<html lang="en">
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
    <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users2 WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
    <img src="img/logos_enohsa_mop.png" alt="Logo ENOHSA">

<br><br><br><br><br><br>
<div class="centr">

<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modalc"><strong>Comunicación y Diseño</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button>
<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modali"><strong>Informática</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button><br><br>
<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modalrh"><strong>Recursos Humanos</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button>
<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modals"><strong>SGBATOS</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button><br><br>
<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modalig"><strong>Observatorio de Genero</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button>
<button class="col-4 btn btn-primary btn8" data-bs-toggle="modal" data-bs-target="#modalsh"><strong>Seguridad e Higiene</strong> <br><i class="fa-solid fa-circle-chevron-up"></i></button>
  
</div>
<!-- Modal Comunicación -->
<div class="modal" tabindex="-1" id="modalc">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Comunicación y Diseño</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-c.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Informática -->
<div class="modal" tabindex="-1" id="modali">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informática</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-informatica.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal RRHH -->
<div class="modal" tabindex="-1" id="modalrh">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Recursos Humanos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-rrhh.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal SGBATOS -->
<div class="modal" tabindex="-1" id="modals">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SGBATOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-sgbatos.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Genero -->
<div class="modal" tabindex="-1" id="modalig">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Observatorio de Genero</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-observatorio.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Seguridad e Higiene -->
<div class="modal" tabindex="-1" id="modalsh">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seguridad e Higiene</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><strong style="color:red">¡IMPORTANTE!</strong> <br><br> Antes de cargar un comunicado asegúrese que el encargado del sector lo haya verificado.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><a class="btn3" href="cargas-seguridad.php"> Cargar</a></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a class="btn3" href="">Salir</a></button>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>
  
  </body>
  <?php include ('footer.php') ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  
</html>

