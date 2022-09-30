<?php
include '../conexion.php';
session_start();
if (isset($_SESSION['id_usuario'])){
    header("location: ../home.php");
}

if(!empty($_POST)) {
    $email = mysqli_real_escape_string($conexion,$_POST['email']);
    $password = mysqli_real_escape_string($conexion,$_POST['password']);

    $sql = "SELECT id FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if ($rows > 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $row['id'];
        header("location: ../home.php");
    }else{
        echo "<script>
        alert('Email o Contraseña Incorrecto');
        window.location = '../index.php';
        </script>";
    }

}
?>