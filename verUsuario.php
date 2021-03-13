<?php
//requires
require "modelo/Usuario.php";
require "modelo/Bd.php";
require "modelo/funciones.php";

$id = intval($_GET['id']);

$usuario = new Figura();
$usuario->obtenerPorId($id);


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
        <h1>Usuario</h1>
        <?php

        echo $usuario->imprimirEnFicha();

        ?>
    </div>
</section>
<?php

include "includes/footer.php";

?>


</body>
</html>
