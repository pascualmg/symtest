<?php


namespace App\DDD\Application\Service\find;


use App\DDD\Domain\IdCurso;
use Doctrine\ORM\Mapping\Id;

class CursoFinderQuery
{
    /** @var IdCurso */
    private $id;

    public function __construct(int $id)
    {
        $this->id = new IdCurso($id);
    }

    public function id()
    {
       return $this->id;
    }
}