<?php

namespace App\DDD\Domain;


class Curso
{
    /** @var NombreCurso */
    private $nombreCurso;

    /**
     * @return NombreCurso
     */
    public function nombreCurso(): NombreCurso
    {
        return $this->nombreCurso;
    }

    public function __construct(NombreCurso $nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;
    }


}