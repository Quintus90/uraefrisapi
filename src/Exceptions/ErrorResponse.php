<?php

namespace Mhassan654\Uraefrisapi\Exceptions;

use Exception;

class ErrorResponse extends Exception
{
    protected $statusCode;

    public function __construct($message, $statusCode)
    {
        parent::__construct($message);
        $this->statusCode = $statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
