<?php

namespace Ueef\Exceptions\Http {

    use Throwable;
    use Ueef\Exceptions\AbstractException;

    class UnauthorizedException extends AbstractException
    {
        public function __construct($message = "", ?Throwable $previous = null)
        {
            parent::__construct($message, 401, $previous);
        }
    }
}
