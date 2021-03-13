<?php

    if(isset($_POST) && !empty($_POST)){
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
        <li><label>Email: </label><input type="text" name="email" id="email"> </li>
        <li><label>Contraseña: </label><input type="text" name="contrasena" id="contrasena"> </li>
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

