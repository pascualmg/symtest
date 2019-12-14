<?php

namespace App\DDD\Domain;

use App\DDD\Domain\Exceptions\CannotCreateCursoException;
use App\DDD\Domain\Exceptions\CannotDeleteCursoException;
use App\DDD\Domain\Exceptions\CannotFindCursoException;
use App\DDD\Domain\Exceptions\CannotUpdateCursoException;

interface CursoRepository
{
    /**
     * @param nombreCurso $nombreCurso To Create
     * @throws CannotCreateCursoException
     */
    public function create(NombreCurso $nombreCurso): void;

    /**
     * @param IdCurso $id
     * @return Curso finded
     * @throws CannotFindCursoException
     */
    public function find(IdCurso $id): ?Curso;

    /**
     * @param Curso $curso To update.
     * @throws CannotUpdateCursoException
     */
    public function update(Curso $curso): void;

    /**
     * @param IdCurso $id The id to delete.
     * @throws CannotDeleteCursoException
     */
    public function delete(IdCurso $id): void;

}