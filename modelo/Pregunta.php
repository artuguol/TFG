<?php


class Pregunta
{
    private $id;
    private $idProyecto;
    private $pregunta;
    private $respuesta;

    /**
     * Pregunta constructor.
     * @param $id
     * @param $idProyecto
     * @param $pregunta
     * @param $respuesta
     */
    public function __construct($id, $idProyecto, $pregunta, $respuesta)
    {
        $this->id = $id;
        $this->idProyecto = $idProyecto;
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
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
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * @param mixed $idProyecto
     */
    public function setIdProyecto($idProyecto)
    {
        $this->idProyecto = $idProyecto;
    }

    /**
     * @return mixed
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * @param mixed $pregunta
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;
    }

    /**
     * @return mixed
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * @param mixed $respuesta
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    }



}