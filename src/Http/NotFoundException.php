<?php

namespace Ueef\Exceptions\Http {

    use Throwable;
    use Ueef\Exceptions\AbstractException;

    class NotFoundException extends AbstractException
    {
        public function __construct($message = "", ?Throwable $previous = null)
        {
            parent::__construct($message, 404, $previous);
        }
    }
}
