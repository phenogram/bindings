<?php

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\Response;

interface ClientInterface
{
    public function sendRequest(string $method, string $json): Response;
}
