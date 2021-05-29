<?php


class Proyecto
{

    private $id;
    private $idUsuario;
    private $tipo;
    private $titulo;
    private $descripcion;
    private $listaPregunta;
    private $categorias;
    private $documentoAyuda;

    /**
     * Proyecto constructor.
     * @param $id
     * @param $tipo
     * @param $titulo
     * @param $descripcion
     * @param $listaPreguntas
     * @param $categorias
     * @param $documentoAyuda
     */
    public function __construct($id, $tipo, $titulo, $descripcion, $idUsuario, $documentoAyuda, $categorias)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->listaPregunta = new ListaPreguntas();
        $this->categorias = $categorias;
        $this->idUsuario = $idUsuario;
        $this->documentoAyuda = $documentoAyuda;
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
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return ListaPreguntas
     */
    public function getListaPregunta()
    {
        return $this->listaPregunta;
    }

    /**
     * @param ListaPreguntas $listaPregunta
     */
    public function setListaPregunta($listaPregunta)
    {
        $this->listaPregunta = $listaPregunta;
    }

    /**
     * @return mixed
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * @param mixed $categorias
     */
    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getDocumentoAyuda()
    {
        return $this->documentoAyuda;
    }

    /**
     * @param mixed $documentoAyuda
     */
    public function setDocumentoAyuda($documentoAyuda)
    {
        $this->documentoAyuda = $documentoAyuda;
    }

    public function insertar($datos, $foto){

        $conexion = new Bd();
        $conexion->insertarElemento($this->tabla,$datos);

    }

    public function obtenerPorId($id){

        $sql = "SELECT id, idUsuario, tipo, titulo, descripcion, listaPregunta, categorias, documentoAyuda FROM ".$this->tabla."WHERE id=".$id;
        $conexion = new Bd();
        $res = $conexion->consulta($sql);
        list($id, $idUsuario,$tipo, $titulo, $descripcion, $listaPregunta, $categorias, $documentoAyuda) = mysqli_fetch_array($res);
        $this->llenar($id, $idUsuario, $tipo, $titulo, $descripcion, $listaPregunta, $categorias, $documentoAyuda);

    }

    public function borrarUsuario($id){

        $sql = "SELECT id, idUsuario, tipo, titulo, descripcion, listaPregunta, categorias, documentoAyuda FROM ".$this->tabla."WHERE id=".$id;
        $conexion = new Bd();
        $res = $conexion->consulta($sql);

    }

    public function imprimeteEnTr(){

        $html = "<tr><td>".$this->id."</td>
                        <td>".$this->idUsuario."</td>
                        <td>".$this->tipo."</td>
                        <td>".$this->titulo."</td>
                        <td>".$this->descripcion."</td>
                        <td>".$this->listaPregunta."</td>
                        <td>".$this->categorias."</td>
                        <td>".$this->documentoAyuda."'></td>
                        <td><a href='verUsuario.php?id=".$this->id."'>Ver</a> </td>
                        <td><a href='ed_usuario.php?id=".$this->id."'>Editar</a> </td>
                        <td><a href='javascript:borrarUsuario(".$this->id.")'>Borrar</a> </td>
                        </tr>";

        return $html;

    }

    public function imprimirEnFicha() {

        $html = "<table border='1'>";

        $html .= "<tr><th>ID</th>
                        <th>ID Usuario</th>
                        <th>Tipo</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Lista Preguntas</th>
                        <th>Lista Categorias</th>
                        <th>Documento Ayuda</th>
                       </tr>";
        $html .="  <tr><td>".$this->id."</td>
                        <td>".$this->idUsuario."</td>
                        <td>".$this->titulo."</td>
                        <td>".$this->descripcion."</td>
                        <td>".$this->listaPregunta."</td>
                        <td>".$this->categorias."></td>
                        <td>".$this->documentoAyuda."></td>
                        </tr></table>";

        return $html;

    }



}