<?php


class Bd
{

    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $basedatos = "tfg_prueba";

    private $conexion;
    private $resultado;

    public function __construct(){

        $this->conexion = new mysqli($this->server, $this->usuario, $this->pass , $this->basedatos);
        $this->conexion->select_db($this->basedatos);
        $this->conexion->query("SET NAMES 'utf8'");

    }

    public function insertarElemento($tabla, $datos, $foto, $carpeta){

        $claves = array();
        $valores = array();

        foreach ($datos as $clave => $valor) {

            $claves[] = $clave;
            $valores[] = "'".$valor."'";

        }

        /*if ($foto['name'] != ""){

            $ruta =subirFoto($foto,$carpeta);

            $clave[] = "foto";
            $valores[] = "'".$ruta."'";

        }*/

        $sql = "INSERT INTO ".$tabla." (".implode(',', $claves).") VALUES (".implode(",", $valores).")";
        echo $sql;

        $this->resultado = $this->conexion->query($sql);
        $res = $this->resultado;
        return $res;
    }

    public function consulta($consulta){
        $this->resultado = $this->conexion->query($consulta);
        $res = $this->resultado;
        return $res;
    }

}