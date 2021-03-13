<?php

require "../modelo/Usuario.php";
require "../modelo/Bd.php";
require "../modelo/funciones.php";

    if(isset($_POST) && !empty($_POST)){

        $usuario = new Usuario();
        $usuario->insertar($_POST,$_FILES['foto']);
       // header('location:listas/listarUsuario.php');

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/js.js" type="text/javascript"></script>
    <?php
    include "../includes/head.php";
    ?>
</head>
<body>

<nav>
    <a href="listas/listaUsuarios.php">Lista</a>

</nav>

<form name="usuarioForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" id="form">

    <ul>
        <li><label>Nombre: </label><input type="text" name="nombre" id="nombre"> </li>
        <li><label>Apellidos: </label><input type="text" name="apellidos" id="apellidos"> </li>
        <li><label>Edad: </label><input type="text" name="edad" id="edad"> </li>
        <li><label>Email: </label><input type="text" name="email" id="email"> </li>
        <li><label>Contraseña: </label><input type="text" name="contrasena" id="contrasena"> </li>
        <li>
        <select id="tipoCuenta" name="tipoCuenta" id="tipoCuenta">
            <option value="Estudiante">Estudiante</option>
            <option value="Profesor">Profesor</option>
            <option value="Empresa">Empresa</option>
        </select>
        </li>
        <li><label>Foto: </label><input type="file" name="foto" id="foto"></li>
        <li><input type="button" value="Guardar" name="boton_envio" onclick="validar()"></li>
    </ul>

</form>



<?php
include "../includes/header.php";
?>
<main>
    <?php
    include "../includes/section.php";
    ?>
</main>
<?php
include "../includes/footer.php";
include "../includes/script.php"
?>




</body>
</html>
