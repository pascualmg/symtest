<?php

namespace App\DDD\Infrastructure;

use App\DDD\Domain\Curso;
use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\IdCurso;
use App\DDD\Domain\NombreCurso;
use Doctrine\Common\Persistence\ObjectRepository;

class CursoRepoORM implements CursoRepository
{
    /** @var ObjectRepository */
    private $repo;

    public function __construct(ObjectRepository $repo)
    {
        $this->repo = $repo;
    }


    /**
     * @inheritDoc
     */
    public function create(Curso $curso): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function find(IdCurso $id): ?Curso
    {
        /** @var \App\Entity\Curso $match */
        $match = $this->repo->find($id->value());
        return
            (null === $match) ?
                null
                :
                new Curso(
                    new IdCurso($match->getId()),
                    new NombreCurso($match->getName())
                );
    }

    /**
     * @inheritDoc
     */
    public function update(Curso $curso): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(IdCurso $id): void
    {
        // TODO: Implement delete() method.
    }
}