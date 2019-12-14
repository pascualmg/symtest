<?php

namespace App\DDD\Infrastructure;

use App\DDD\Domain\Curso;
use App\Entity\Curso as CursoDoctrine;
use App\DDD\Domain\CursoRepository;
use App\DDD\Domain\IdCurso;
use App\DDD\Domain\NombreCurso;
use Doctrine\Common\Cache\ZendDataCache;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;

class doctrineCursoRepo implements CursoRepository
{
    /** @var ObjectRepository */
    private $repo;

    /** @var EntityManagerInterface */
    private $em;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->repo = $doctrine->getRepository(\App\Entity\Curso::class);
        $this->em = $doctrine->getManager();
    }


    /**
     * @inheritDoc
     */
    public function create(NombreCurso $nombreCurso): void
    {
        $curso2persist = new CursoDoctrine();
        $curso2persist->setName($nombreCurso->value())->setCosa('algo');

        $this->em->persist($curso2persist);
        $this->em->flush();

    }

    /**
     * @inheritDoc
     */
    public function find(IdCurso $id): ?Curso
    {
        /** @var CursoDoctrine $match */
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