<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an HTTP link to be sent.
 */
interface InputMediaLinkInterface extends TypeInterface
{
    /** @var string $type Type of the media, must be link */
    public string $type { set; get; }

    /** @var string $url HTTP URL of the link */
    public string $url { set; get; }
}
