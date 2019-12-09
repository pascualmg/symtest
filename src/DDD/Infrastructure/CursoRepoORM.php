<?php

namespace App\DDD\Infrastructure;

use App\DDD\Domain\CannotDeleteCursoException;
use App\DDD\Domain\cannotFindCursoException;
use App\DDD\Domain\CannotUpdateCursoException;
use App\DDD\Domain\Curso;
use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\Exceptions\cannotCreateCursoException;
use App\DDD\Domain\IdCurso;
use App\Repository\CursoRepository as ORMCursoRepository;
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
    public function create(\App\DDD\Domain\Curso $curso): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function find(\App\DDD\Domain\IdCurso $id): Curso
    {
        $match = $this->repo->find($id->value());
        if (null === $match) {
            throw new \App\DDD\Domain\Exceptions\cannotFindCursoException();
        }
        return new Curso($match->getName());
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