<?php

namespace Phenogram\Bindings\Types;

class Response implements TypeInterface
{
    public bool $ok;
    public ?string $result = null;
    public ?int $errorCode = null;
    public ?string $description = null;
    public ?ResponseParameters $parameters = null;
}
