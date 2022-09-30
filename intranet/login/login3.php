<?php
include '../conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'");

$fila = mysqli_num_rows($resultado);

if ($fila > 0) {
    session_start();
    $_SESSION['user'] = $email;
    header("location: ../home.php");
}else{
    echo '<script>
    alert("El correo o la contraseña son invalidos!");
    location.href= "../index.php";</script>';   
}

mysqli_free_result($resultado);
mysqli_close($conexion);





<?php
include 'conexion.php';
session_start();
if(!isset($_SESSION['user'])){
    header ("location:index.php");
}
$email = $_SESSION['user'];

?>