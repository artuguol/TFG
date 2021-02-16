<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../includes/head.php";
    ?>
</head>
<body>

<nav>
    <a href="listas/listaUsuarios.php">Lista</a>

</nav>

<form name="usuarioForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

    <ul>
        <li><label>Nombre: </label><input type="text" name="nombre"> </li>
        <li><label>Apellidos: </label><input type="text" name="apellidos"> </li>
        <li><label>Edad: </label><input type="text" name="edad"> </li>
        <li><label>Email: </label><input type="text" name="email"> </li>
        <li><label>Contraseña: </label><input type="text" name="contrasena"> </li>
        <li>
        <select id="tipoCuenta" name="tipoCuenta">
            <option value="Estudiante">Estudiante</option>
            <option value="Profesor">Profesor</option>
            <option value="Empresa">Empresa</option>
        </select>
        </li>
        <li><label>Foto: </label><input type="file" name="foto"></li>
        <li><input type="submit" value="Guardar"></li>
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
