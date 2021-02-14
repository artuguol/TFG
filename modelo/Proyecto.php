<?php


class Proyecto
{

    private $id;
    private $idUsuario;
    private $tipo;
    private $titulo;
    private $descripcion;
    private $listaPregunta;
    private $listaCategoria;
    private $documentoAyuda;

    /**
     * Proyecto constructor.
     * @param $id
     * @param $tipo
     * @param $titulo
     * @param $descripcion
     * @param $listaPreguntas
     */
    public function __construct($id, $tipo, $titulo, $descripcion, $idUsuario)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->listaPregunta = new ListaPreguntas();
        $this->listaCategoria = new ListaCategoria();
        $this->idUsuario = $idUsuario;
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
    public function getListaCategoria()
    {
        return $this->listaCategoria;
    }

    /**
     * @param mixed $listaCategoria
     */
    public function setListaCategoria($listaCategoria)
    {
        $this->listaCategoria = $listaCategoria;
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



}