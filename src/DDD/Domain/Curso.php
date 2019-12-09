<?php

namespace App\DDD\Domain;


class Curso
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name)
    {
        $this->name = $name;

    }


    public function __sleep()
    {
        // TODO: Implement __sleep() method.
        return array('name');
    }
    public function __wakeup()
    {
        dump('me levanto maikel');
    }
}