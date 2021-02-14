<?php


class Entregable
{

    private $id;
    private $titulo;
    private $descripcion;
    private $documentos;

    /**
     * Entregable constructor.
     * @param $id
     * @param $titulo
     * @param $descripcion
     * @param $documentos
     */
    public function __construct($id, $titulo, $descripcion, $documentos)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->documentos = $documentos;
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
     * @return mixed
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }

    /**
     * @param mixed $documentos
     */
    public function setDocumentos($documentos)
    {
        $this->documentos = $documentos;
    }



}