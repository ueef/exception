<?php
declare(strict_types=1);

namespace Ueef\Exceptions\Http {

    use Throwable;
    use Ueef\Exceptions\AbstractException;
    use Ueef\Exceptions\Interfaces\HttpExceptionInterface;

    class ErrorException extends AbstractException implements HttpExceptionInterface
    {
        public function __construct($message = "", ?Throwable $previous = null)
        {
            parent::__construct($message, 500, $previous);
        }
    }
}
