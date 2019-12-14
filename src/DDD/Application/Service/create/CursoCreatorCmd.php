<?php


namespace App\DDD\Application\Service\create;


use App\DDD\Domain\Curso;

class CursoCreatorCmd
{

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

}