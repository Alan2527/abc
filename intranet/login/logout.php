<?php
session_start();
if(isset($_SESSION['id_usuario'])){
    session_destroy();
    echo "<script>
    alert('Sesión Cerrada!');
    window.location = '../index.php';
    </script>";
}
?>