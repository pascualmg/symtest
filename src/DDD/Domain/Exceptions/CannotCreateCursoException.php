<?php


namespace App\DDD\Domain\Exceptions;


use Throwable;

class CannotCreateCursoException extends \Exception
{
    public function __construct($message = "wiii, Error al crear el curso maikel", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}