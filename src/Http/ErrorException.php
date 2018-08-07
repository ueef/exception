<?php

namespace Ueef\Exceptions\Http {

    use Throwable;
    use Ueef\Exceptions\AbstractException;

    class ErrorException extends AbstractException
    {
        public function __construct($message = "", ?Throwable $previous = null)
        {
            parent::__construct($message, 500, $previous);
        }
    }
}
