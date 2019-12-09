<?php


namespace App\DDD\Domain;


class IdCurso
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}