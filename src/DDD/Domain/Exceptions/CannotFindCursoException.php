<?php


namespace App\DDD\Domain\Exceptions;

use Throwable;

class CannotFindCursoException extends \Exception
{
    public function __construct($message = "no localizo mucho este curso", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}