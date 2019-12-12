<?php

namespace App\DDD\Application\Service\find;


use App\DDD\Domain\Exceptions\CannotFindCursoException;
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
     * @throws CannotFindCursoException
     */
    public function __invoke(CursoFinderQuery $query)
    {
        /** @var Curso $finded */
        $finded = $this->repo->find($query->id());
        if (null === $finded) {
          throw new CannotFindCursoException();
        }
        return $finded;
    }
}