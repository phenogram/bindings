<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents an HTTP link.
 */
class Link implements Interfaces\LinkInterface
{
    /**
     * @param string $url URL of the link
     */
    public function __construct(
        public string $url,
    ) {
    }
}
