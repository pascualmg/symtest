<?php

namespace App\DDD\Domain;


class Curso
{
    /** @var NombreCurso */
    private $nombreCurso;

    /** @var IdCurso */
    private $idCurso;

    public function __construct(IdCurso $idCurso, NombreCurso $nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;
    }

    /**
     * @return IdCurso
     */
    public function idCurso(): IdCurso
    {
        return $this->idCurso;
    }


    /**
     * @param IdCurso $idCurso
     */
    public function setIdCurso(IdCurso $idCurso): void
    {
        $this->idCurso = $idCurso;
    }

    /**
     * @return NombreCurso
     */
    public function nombreCurso(): NombreCurso
    {
        return $this->nombreCurso;
    }


}