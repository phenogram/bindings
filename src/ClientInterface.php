<?php

namespace Phenogram\Bindings;

interface ClientInterface
{
    /**
     * @return PromiseInterface<string>
     */
    public function sendRequest(string $method, string $json): PromiseInterface;
}
