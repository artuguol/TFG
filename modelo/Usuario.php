<?php


class Usuario
{

    private $id;
    private $nombre;
    private $apellidos;
    private $edad;
    private $email;
    private $contrasena;
    private $tipoCuenta;
    private $foto;
    private $tabla;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nombre
     * @param $apellidos
     * @param $edad
     * @param $email
     * @param $contrasena
     * @param $tipoCuenta
     * @param $foto
     * @param $tabla
     */
    public function __construct($id = "", $nombre = "", $apellidos = "", $edad = "", $email = "", $contrasena = "", $tipoCuenta = "", $foto = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->tipoCuenta = $tipoCuenta;
        $this->foto = $foto;
        $this->tabla = "Usuarios";
        $this->carpetaFotos = "fotos";
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param mixed $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @return mixed
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * @param mixed $tipoCuenta
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function insertar($datos, $foto){

        $conexion = new Bd();
        $conexion->insertarElemento($this->tabla,$datos,$this->carpetaFotos, $foto);

    }



}