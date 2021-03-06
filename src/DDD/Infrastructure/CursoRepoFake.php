<?php


namespace App\DDD\Infrastructure;


use App\DDD\Domain\Curso;
use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\NombreCurso;

class CursoRepoFake implements CursoRepository
{

    /**
     * @inheritDoc
     */
    public function create(NombreCurso $curso): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function find(\App\DDD\Domain\IdCurso $id): Curso
    {
//        throw new cannotFindCursoException();
        return new Curso('fakeCurso');
    }

    /**
     * @inheritDoc
     */
    public function update(\App\DDD\Domain\Curso $curso): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(\App\DDD\Domain\IdCurso $id): void
    {
        // TODO: Implement delete() method.
    }
}