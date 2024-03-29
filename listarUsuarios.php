<?php
require "modelo/ListaUsuarios.php";
require "modelo/Usuario.php";
require "modelo/Bd.php";
require "modelo/funciones.php";

$lista = new ListaUsuarios();
if(isset($_GET['buscar']) && !empty($_GET['buscar'])){

    $lista->obtenerElementos(addslashes($_GET['buscar']));

}else {
    $lista->obtenerElementos();
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
    <script src="js/js.js" type="text/javascript"></script>
</head>
<body>
<?php
include "includes/header.php";
include "includes/menu.php";
?>
<section>

    <h1>Lista de Usuarios</h1>

    <form name="buscador" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <input name="buscar" type="text" placeholder="Buscador"><input type="submit" value="Buscar">
    </form>


    <div class="botones"><a href="ed_usuario.php">Añadir</a></div>
    <div class="lista" id="lista">

        <?php

        echo  $lista->imprimirUsuariosEnBack();

        ?>


    </div>
</section>
<?php

include "includes/footer.php";

?>


</body>
</html>
