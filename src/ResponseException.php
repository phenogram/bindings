<?php

declare(strict_types=1);

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\Response;

class ResponseException extends \RuntimeException
{
    public function __construct(public Response $response)
    {
        parent::__construct(
            sprintf(
                'Response from Telegram bot API is not ok: %s',
                $response->description ?? 'Unknown error',
            ),
            $response->errorCode ?? 0
        );
    }
}
