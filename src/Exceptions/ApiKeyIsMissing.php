<?php

declare(strict_types=1);

namespace PlutoLinks\Loops\Laravel\Exceptions;

use Exception;

class ApiKeyIsMissing extends Exception
{
    public static function create(): ApiKeyIsMissing
    {
        return new ApiKeyIsMissing('Loops API key is missing. Please set the LOOPS_API_KEY environment variable.');
    }
}
