<?php

namespace Phenogram\Bindings;

interface ClientInterface
{
    public function sendRequest(string $method, string $json): string;
}
