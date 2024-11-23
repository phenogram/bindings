<?php

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\Interfaces\ResponseInterface;

interface ClientInterface
{
    public function sendRequest(string $method, array $data): ResponseInterface;
}
