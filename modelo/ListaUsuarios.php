<?php


class ListaUsuarios
{

    private $lista;
    private $tabla;

    /**
     * ListaUsuarios constructor.
     * @param $lista
     */
    public function __construct()
    {
        $this->lista = array();
        $this->tabla = "usuario";
    }

    public function obtenerElementos(){

        $sql = "SELECT * FROM ".$this->tabla." ;";

        $conexion = new Bd();

        $res = $conexion->consulta($sql);

        while (list($id, $nombre,$apellidos, $edad, $email, $contrasena, $tipoCuenta, $foto, $permiso) = mysqli_fetch_array($res)){
            $fila = new Usuario($id, $nombre,$apellidos, $edad, $email, $contrasena, $tipoCuenta, $foto, $permiso);
            array_push($this->lista, $fila);
        }

    }

    public function imprimirUsuariosEnBack(){

        $html = "<table>";
        $html.= "<tr><th>ID</th>
                    <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Tipo de Cuenta</th>
                        <th>Foto</th>
                        <th>Permiso</th>
                    </tr>";
        for ($i = 0; $i < sizeof($this->lista); $i++){
            $html .= $this->lista[$i]->imprimirEnTr();
        }
        $html .= "</table>";

        return $html;

    }


}