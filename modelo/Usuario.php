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

    public function llenar($id, $nombre, $apellidos, $edad, $email, $contrasena, $tipoCuenta, $foto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->tipoCuenta = $tipoCuenta;
        $this->foto = $foto;
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


    public function obtenerPorId($id){

        $sql = "SELECT id, nombre, apellidos, edad, email, contrasena, tipoCuenta, foto FROM ".$this->tabla."WHERE id=".$id;
        $conexion = new Bd();
        $res = $conexion->consulta($sql);
        list($id, $nombre,$apellidos, $edad, $email, $contrasena, $tipoCuenta, $foto) = mysqli_fetch_array($res);
        $this->llenar($id, $nombre, $apellidos,$edad, $email, $contrasena, $tipoCuenta, $foto);

    }

    public function borrarUsuario($id){

        $sql = "SELECT id, nombre, apellidos, edad, email, contrasena, tipoCuenta, foto FROM ".$this->tabla."WHERE id=".$id;
        $conexion = new Bd();
        $res = $conexion->consulta($sql);

    }

    public function imprimeteEnTr(){

        $html = "<tr><td>".$this->id."</td>
                        <td>".$this->nombre."</td>
                        <td>".$this->apellidos."</td>
                        <td>".$this->edad."</td>
                        <td>".$this->email."</td>
                        <td>".$this->contrasena."</td>
                        <td>".$this->tipoCuenta."</td>
                        <td><img src='".$this->carpetaFotos.$this->foto."'></td>
                        <td><a href='verUsuario.php?id=".$this->id."'>Ver</a> </td>
                        <td><a href='ed_usuario.php?id=".$this->id."'>Editar</a> </td>
                        <td><a href='javascript:borrarUsuario(".$this->id.")'>Borrar</a> </td>
                        </tr>";

        return $html;

    }

    public function imprimirEnFicha() {

        $html = "<table border='1'>";

        $html .= "<tr><th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Tipo de Cuenta</th>
                        <th>Foto</th>
                       </tr>";
        $html .="  <tr><td>".$this->id."</td>
                        <td>".$this->nombre."</td>
                        <td>".$this->apellidos."</td>
                        <td>".$this->edad."</td>
                        <td>".$this->email."</td>
                        <td>".$this->contrasena."></td>
                        <td>".$this->tipoCuenta."></td>
                        <td><img src='".$this->foto."'></td>
                        </tr></table>";

        return $html;

    }

}