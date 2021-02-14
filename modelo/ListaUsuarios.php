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

        while (list($id, $usuario, $contrasena, $foto) = mysqli_fetch_array($res)){
            $fila = new Usuario($id, $usuario, $contrasena, $foto);
            array_push($this->lista, $fila);
        }

    }

    public function imprimirUsuariosEnBack(){

        $html = "<table>";
        $html.= "<tr><th>ID</th>
                    <th>Usario</th>
                    <th>Contraseña</th>
                    <th>Foto</th>
                    <th colspan='3'></th> </tr>";
        for ($i = 0; $i < sizeof($this->lista); $i++){
            $html .= $this->lista[$i]->imprimirEnTr();
        }
        $html .= "</table>";

        return $html;

    }


}