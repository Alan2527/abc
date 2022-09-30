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
    <title>Editar comunicado</title>
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
<body>
    <header>
    <?php 
            $sql = mysqli_query($conexion, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
    <img src="img/logos_enohsa_mop.png" alt="Logo ENOHSA">
    <a class="btn btn-danger btn-enviar btn4 btn-crearcomu btn-crearcomu2" href="cargas-observatorio.php"><strong>Volver</strong></a>



    </header>
<div class="centrar-form">
<div class="imagen-inicio">
    <h1><strong>Editar comunicado</strong></h1>
    </div>
  </main>
  <div>
    <h3>Complete los campos de carga</h3>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM comuident WHERE id='$id' ORDER BY id DESC";
$result=mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result)){
    ?>
<form action="procesar-comu-genero.php" method="POST">
<br><br>
<input type="hidden" value="<?php echo $row['id']?>" name="id" readonly> 
<strong>Seleccionar Fecha:</strong>
<br>
<input type="date" name="fecha" value="<?php echo $row['fecha'] ?>">
<br>
<strong>Título:</strong>
<br>
<input type="text" name="titulo" id="" value="<?php echo $row['titulo'] ?>">
<br><br>
<strong>Texto:</strong>
<br>
<textarea class="consulta" name="texto" id="" cols="100" rows="15"><?php echo $row['texto'] ?></textarea>
<?php 
} 
?>
<br>
<input class="btn btn-primary btn3" type="submit" value="Actualizar">
</form>
</div>
</div>
</body>
<?php include ('footer.php') ?>
</html>