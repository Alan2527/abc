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
<body>
    <header>

    <img src="img/logos_enohsa_mop.png" alt="Logo ENOHSA">
    <a class="btn btn-danger btn-enviar btn4 btn-crearcomu btn-crearcomu2" href="cargas-comunicacion.php"><strong>Volver</strong></a>



    </header>
<!-- FORMULARIO DE CARGA DE COMUNICADO -->
<div class="centrar-form">
<div class="imagen-inicio">
    <h1><strong>Crear nuevo comunicado</strong></h1>
    </div>
  </main>
  <div>
    <h3>Complete los campos de carga</h3>
    <?php
//ENVIAR DATOS DEL FORMULARIO A LA BASE DE DATOS:

    if(!empty($_POST['fecha'])) {
        $titulo=$_POST['titulo'];
        $texto=$_POST["texto"];
        $fecha=$_POST["fecha"];
        $imagen=$_POST["imagen"];

        if(!empty($_POST['id'])) {
            $id_maximo = $_POST['id'];
            mysqli_query($conexion, "UPDATE comusegu SET titulo='$titulo' texto='$texto' fecha='$fecha' WHERE id='$id_maximo'");
            echo 'SE HA ACTUALIZADO LA INFORMACIÓN CON EXITO<br>';
        }else {
            $sql=mysqli_query($conexion, "SELECT id FROM comusegu WHERE titulo='$titulo' texto='$texto' fecha='$fecha'");
            if($row=mysqli_fetch_array($sql)) {
                echo 'NO SE PERMITEN DATOS DUPLICADOS EN LA BASE DE DATOS<br><br>';
            }else{
                mysqli_query($conexion, "INSERT INTO comusegu (titulo, texto, fecha) VALUES ('$titulo', '$texto', '$fecha')");
                $ss=mysqli_query($conexion, "SELECT MAX(id) as id_maximo FROM comusegu");
                if($rr=mysqli_fetch_array($ss)) {
                    $id_maximo=$rr['id_maximo'];
                }
                echo "<script>
                alert('Carga exitosa!');
                window.location = 'cargas-seguridad.php';
                </script>";
            }
        }
        
        $nameimagen = $_FILES['imagen']['name'];
        $tmpimagen = $_FILES['imagen']['tmp_name'];
        $urlnueva = "imagen-seguridad/foto_".$id_maximo.".jpg";
        if(is_uploaded_file($tmpimagen)) {
            copy($tmpimagen, $urlnueva);
        }else{
            echo 'ERROR AL CARGAR LA IMAGEN';
        }    
    }
?>
  </div>
  <div>
  <form name="form" action="" method="post" enctype="multipart/form-data">
    <br><br>
<strong>Seleccionar Fecha:</strong>
<br>
<input type="date" name="fecha" required>
<br>
<strong>Comunicado:</strong>
<br>
<input type="text" name="titulo" id="" placeholder="Titulo del comunicado">
<br><br>
<textarea class="consulta" name="texto" id="" cols="100" rows="20" placeholder="Escriba el comunicado..."></textarea>
<br><br>
<button class="btn btn-primary btn3" type="reset" name="borrar"><strong>Borrar</strong></button>
<button class="btn btn-primary btn3" type="submit" name="cargar"><strong>Cargar</strong></button>
</form>
  </div>
</div>
<hr>
</body>
<?php include ('includes/footer.php') ?>
</html>