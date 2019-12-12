<?php

namespace App\DDD\Domain;

use App\DDD\Domain\Curso;
use App\DDD\Domain\IdCurso;
use App\DDD\Domain\Exceptions\cannotCreateCursoException;

interface CursoRepository
{
    /**
     * @param \App\DDD\Domain\Curso $curso To Create
     *@throws cannotCreateCursoException
     */
    public function create(Curso $curso) : void;

    /**
     * @throws cannotFindCursoException
     * @param \App\DDD\Domain\IdCurso $id
     * @return \App\DDD\Domain\Curso finded
     */
    public function find(IdCurso $id) : ?Curso;

    /**
     * @throws CannotUpdateCursoException
     * @param \App\DDD\Domain\Curso $curso To update.
     */
    public function update(Curso $curso) : void;

    /**
     * @throws CannotDeleteCursoException
     * @param \App\DDD\Domain\IdCurso $id The id to delete.
     */
    public function delete(IdCurso $id) : void;

}