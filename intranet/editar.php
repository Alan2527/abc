<?php
session_start();
include 'conexion.php';
if(!isset($_SESSION['id_usuario'])){
    header ("location:index.php");
}
?>
<?php
$conexion=mysqli_connect("localhost","root","","intranet");

if(!empty($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $sector=$_POST['sector'];
    $subsector=$_POST['subsector'];
    $subsector2=$_POST['subsector2'];
    $interno=$_POST['interno'];
    $fecha=$_POST['fecha'];
    



    if(!empty($_POST['id'])){
        $id_maximo=$_POST['id'];
        mysqli_query($conexion,"UPDATE usuarios SET email='$email', password='$password', nombre='$nombre', apellido='$apellido', sector='$sector', subsector='$subsector', subsector2='$subsector2', interno='$interno', fecha='$fecha' WHERE id='$id_maximo'");
        header("location:perfil.php");
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENOHSA intranet</title>
    <link rel="icon" type="image/png" href="../img/enohsa.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carga.css">
    <link rel="stylesheet" href="css/centrar.css">
    <link rel="stylesheet" href="css/comunicados.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffed7357f6.js" crossorigin="anonymous"></script>

</head>
<body >
<?php include 'includes/navbar.php'; ?>

    <?php
        $ss=mysqli_query($conexion,"SELECT * FROM usuarios WHERE id = {$_GET['id']}");
        while($rr=mysqli_fetch_array($ss)){
    ?>


<div class="body-perfil">
<h1 class="h1perf" style="text-align:center">Editar Perfil<hr></h1>
<div class="datos">
<div class="perf">
<img class="img-perfil" src="imagen/foto_<?php echo $rr['id']; ?>.jpg?<?php echo rand(0,1000); ?>" width="100px" height="100px" alt="">
</div>
<form class="edit-perf" id="f1" name="f1" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $rr[0]; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="text" name="nombre" placeholder="Nombre" value="<?php echo $rr['nombre']; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="text" name="apellido" placeholder="Apellido" value="<?php echo $rr['apellido']; ?>">
            <!-- Select Sector -->
            <select class="form-select form-control3" aria-label="Default select example" name="sector" id="departamentos" onchange="cambia_departamento()">
			<option value="N/A">Seleccione...</option>
            <option value="Asesoría Jurídica">Asesoría Jurídica</option>
            <option value="COET">COET</option>
            <option value="Coordinación Área De Informática">Coordinación Área De Informática</option>
            <option value="Coordinación UFE">Coordinación UFE</option>
            <option value="Comunicación Y Diseño">Comunicación Y Diseño</option>
            <option value="Delegaciones">Delegaciones</option>
            <option value="Gerencia Administrativa Financiera">Gerencia Administrativa Financiera </option>
            <option value="Gerencia General">Gerencia General</option>
            <option value="Gerencia Técnica">Gerencia Técnica </option>
            <option value="Observatorio de Género">Observatorio de Género</option>
            <option value="PROFESA">PROFESA</option>
            <option value="Recursos Humanos">Recursos Humanos </option>
            <option value="Unidad Administrador">Unidad Administrador</option>
            <option value="Unidad de Auditoría Interna">Unidad de Auditoría Interna</option>
            <option value="Unidad de Sumario">Unidad de Sumario</option>
            <option value="Unidad Sub Administrador">Unidad Sub Administrador</option>
            </select>
            <!-- Select SubSector -->
		    <select class="form-select form-control3" aria-label="Default select example" name="subsector" id="minucipios">

            <option value="N/A">Seleccione...     </option>

		    </select>
    
            <input class="form-control form-control3" aria-label="default input example" type="text" name="subsector2" placeholder="Detalle" value="<?php echo $rr['subsector2']; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="text" name="interno" placeholder="Número de interno" value="<?php echo $rr['interno']; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="date" name="fecha" value="<?php echo $rr['fecha']; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="email" name="email" placeholder="Email" value="<?php echo $rr['email']; ?>">
            <input class="form-control form-control3" aria-label="default input example" type="password" name="password" placeholder="Contraseña" value="<?php echo $rr['password']; ?>">
            <input class="form-control form-control3" type="file" name="imagen" id="imagen">
            <button class="btn btn-primary btn-enviar btn1322" type="submit">Actualizar</button>
        </form>
        </div>
        </div>
<?php
}
?> 
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
	<script type="text/javascript" src="cargarsectores.js"></script>      
</body>
<?php include 'includes/footer.php'; ?>
</html>
