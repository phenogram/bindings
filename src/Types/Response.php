<?php

namespace Phenogram\Bindings\Types;

class Response implements TypeInterface
{
    public bool $ok;

    /** JSON encoded value of the result field */
    public ?string $result = null;
    public ?int $errorCode = null;
    public ?string $description = null;
    public ?ResponseParameters $parameters = null;
}
