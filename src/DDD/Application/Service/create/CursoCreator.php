<?php


namespace App\DDD\Application\Service\create;


use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\Exceptions\CannotCreateCursoException;
use App\DDD\Domain\NombreCurso;

class CursoCreator
{
    /**
     * @var CursoRepository
     */
    private $cursoRepository;

    public function __construct(CursoRepository $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }

    /**
     * @param CursoCreatorCmd $cmd
     * @throws CannotCreateCursoException
     */
    public function __invoke(CursoCreatorCmd $cmd) :void
    {
        $this->cursoRepository->create(new NombreCurso($cmd->name()));
    }
}