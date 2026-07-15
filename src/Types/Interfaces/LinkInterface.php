<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an HTTP link.
 */
interface LinkInterface extends TypeInterface
{
    /** @var string $url URL of the link */
    public string $url { set; get; }
}
