<?php
//requires
require "modelo/Usuario.php";
require "modelo/Bd.php";
require "modelo/funciones.php";

$usuario = new Usuario();

if(isset($_GET['id']) && !empty($_GET['id'])){

    $id = intval($_GET['id']);
    $usuario->obtenerPorId($id);

}

if(isset($_POST) && !empty($_POST)){

    if(!empty($_POST['id'])){
        //Actualizar
        $id = intval($_POST['id']);
        $usuario->update($id,$_POST, $_FILES['foto']);
    }else {
        // Insertar
        $usuario->insertar($_POST, $_FILES['foto']);
    }
    // header('location:listarFiguras.php');



}






?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
    include "includes/head.php";
    ?>

</head>
<body>
<?php
include "includes/header.php";
include "includes/menu.php";
?>
<section>
    <div class="formulario">
        <h1>Formulario de Usuario</h1>

        <form name="usuario" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

            <ul>
                <input type="hidden" name="id" value="<?php echo $usuario->getId() ?>">
                <li><label>Nombre: </label><input type="text" name="nombre" value="<?php echo $usuario->getNombre() ?>"> </li>
                <li><label>Apellidos: </label><input type="number" name="unidades" value="<?php echo $usuario->getApellidos() ?>"> </li>
                <li><label>Edad: </label><input type="text" name="precio" value="<?php echo $usuario->getEdad() ?>"> </li>
                <li><label>Email: </label><input type="number" name="coleccion" value="<?php echo $usuario->getEmail() ?>"> </li>
                <li><label>Contraseña: </label><input type="number" name="coleccion" value="<?php echo $usuario->getContrasena() ?>"> </li>
                <li><label>Tipo de Cueenta: </label><input type="number" name="coleccion" value="<?php echo $usuario->getTipoCuenta() ?>"> </li>
                <li><label>Foto: </label><input type="file" name="foto"> </li>
                <?php
                if(strlen($usuario->getFoto())>0){
                    echo "<li><img src='".$usuario->getFoto()."' width='55px'> </li>";
                }

                ?>

                <li><input type="submit" value="Guardar"></li>
            </ul>

        </form>

    </div>
</section>
<?php

include "includes/footer.php";

?>


</body>
</html>
