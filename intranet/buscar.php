<?php 
  session_start();
  include 'conexion.php';
  if(!isset($_SESSION['id_usuario'])){
    header("location: index.php");
  }
  ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar perfil</title>
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
            $sql = mysqli_query($conexion, "SELECT * FROM usuarios");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
    <img src="img/logos_enohsa_mop.png" alt="Logo ENOHSA">
    <a class="btn btn-danger btn-danger2 btn-enviar btn4 btn-crearcomu" href="perfil.php"><strong>Volver</strong></a>
        

 
      <div class="search2">
        <div class="input-group mb-8 input-group2">
        <form action="">
        <input type="text" class="form-control form-control2" name="busqueda" placeholder="Ingrese nombre, apellido o sector para buscar...">
        <button type="submit" class="btn btn-outline-secondary btn-outline-secondary2" name="enviar"><i class="fa-solid fa-solid2 fa-magnifying-glass"></i></button>
        </form>
        </div>
        </header>
        <br><br><br>
        <div class="result">  
        <?php
        if(isset($_GET['enviar'])){
          $busqueda = $_GET['busqueda'];

          $consulta = $conexion->query("SELECT * FROM usuarios WHERE nombre LIKE '%$busqueda%' OR apellido LIKE '%$busqueda%' OR sector LIKE '%$busqueda%' OR subsector LIKE '%$busqueda%' ORDER BY nombre");
        
          while ($row = $consulta->fetch_array()) {
            ?>
          
            <div class="datos">
            <div class="perf">
            <img class="img-perfil" src="imagen/foto_<?php echo $row['id']; ?>.jpg?<?php echo rand(0,1000); ?>" alt="...">
            </div>
            <div class="info">
            <div class="info2">
            <p class="nomyape"><?php echo $row['nombre']. " " . $row['apellido']?></p>
            </div>
            <div class="info3">
            <p class="sect"><?php echo $row['sector'] ?></p>
            <p class="subsect2"><?php echo $row['subsector'] ?></p>
            <p class="subsect2"><?php echo $row['subsector2'] ?></p>
            <p class="eml2"><?php echo $row['email'] ?></p>
            <p class="num2"><?php echo $row['interno'] ?></p>
            </div>
            </div>
        </div>
        <div>
        </div>
            <?php   
          }
       
        }
        ?>

    </div>
      </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
  </body>
  <?php include ('includes/footer.php') ?>
</html>