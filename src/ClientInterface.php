<?php

namespace Phenogram\Bindings;

use React\Promise\PromiseInterface;

interface ClientInterface
{
    /**
     * @return PromiseInterface<string>
     */
    public function sendRequest(string $method, string $json): PromiseInterface;
}
