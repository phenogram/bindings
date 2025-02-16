<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a chat background.
 */
interface ChatBackgroundInterface extends TypeInterface
{
    /** @var BackgroundTypeInterface $type Type of the background */
    public BackgroundTypeInterface $type { set; }
}
