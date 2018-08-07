<?php

namespace Ueef\Exceptions\Http {

    use Throwable;
    use Ueef\Exceptions\AbstractException;

    class BadRequestException extends AbstractException
    {
        public function __construct($message = "", ?Throwable $previous = null)
        {
            parent::__construct($message, 400, $previous);
        }
    }
}
