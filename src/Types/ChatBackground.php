<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\BackgroundTypeInterface;

/**
 * This object represents a chat background.
 */
class ChatBackground implements Interfaces\ChatBackgroundInterface
{
    /**
     * @param BackgroundTypeInterface $type Type of the background
     */
    public function __construct(
        public BackgroundTypeInterface $type,
    ) {
    }
}
