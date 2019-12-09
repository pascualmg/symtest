<?php

namespace App\DDD\Application\Service\find;


use App\DDD\Domain\Exceptions\cannotFindCursoException;
use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\Curso;

class CursoFinder
{
    /** @var CursoRepository */
    private $repo;

    public function __construct(CursoRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @param CursoFinderQuery $query
     * @return Curso
     * @throws cannotFindCursoException
     */
    public function __invoke(CursoFinderQuery $query)
    {
        return $this->repo->find($query->id());
    }
}