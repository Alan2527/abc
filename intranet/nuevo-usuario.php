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
<?php include 'includes/header1.php'; ?>
<body class="body1">
  <div class="wrapper">
    <section class="form login">
      <header>Nuevo Usuario<img class="img5" src="img/enohsa.png" alt="logo enohsa"></header>
<?php      if(!empty($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    



    if(!empty($_POST['id'])){
        $id_maximo=$_POST['id'];
        mysqli_query($conexion,"UPDATE usuarios SET email='$email', password='$password', nombre='$nombre', apellido='$apellido', sector='$sector', subsector='$subsector', subsector2='$subsector2', interno='$interno', fecha='$fecha' WHERE id='$id_maximo'");
        echo 'Se actualizo con exito<br><br>';
    }else{
        $sql=mysqli_query($conexion,"SELECT id FROM usuarios WHERE email='$email'");
        if($row=mysqli_fetch_array($sql)){
            echo 'No se permiten datos duplicados<br><br>';
        }else{
            mysqli_query($conexion,"INSERT INTO usuarios (email,password) VALUES ('$email','$password')");
            $ss=mysqli_query($conexion,"SELECT MAX(id) as id_maximo FROM usuarios");
            if($rr=mysqli_fetch_array($ss)){
                $id_maximo=$rr['id_maximo'];
            }
            echo 'Registro exitoso<br><br>';
        }
    }
            $nameimagen=$_FILES['imagen']['name'];
            $tmpimagen=$_FILES['imagen']['tmp_name'];
            $urlnueva="imagen/foto_".$id_maximo.".jpg";
            if(is_uploaded_file($tmpimagen)){
                copy($tmpimagen,$urlnueva);
                echo 'Imagen cargada con exito';
            }else{
                echo 'No se cargó la imagen';
            }
}
?>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Foto de perfil:</label>
          <input type="file" name="imagen" id="imagen" required>
        </div>
        <div class="field input">
          <label>Dirección de correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ingresar">
        </div>
      </form>
    </section>
  </div>
  
  <script src="../js/pass-show-hide.js"></script>
  <script src="../js/login.js"></script>

</body>
</html>