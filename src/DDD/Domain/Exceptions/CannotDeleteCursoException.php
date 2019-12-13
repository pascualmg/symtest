<?php


namespace App\DDD\Domain\Exceptions;


use Throwable;

class CannotDeleteCursoException extends \Exception
{
    public function __construct($message = "wiii, Error al updatear el curso maikel", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}