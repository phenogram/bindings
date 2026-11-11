<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;

/**
 * The theme based on a unique gift owned by the user or the chat.
 */
class ChatShareThemeUniqueGift extends ChatShareTheme implements Interfaces\ChatShareThemeUniqueGiftInterface
{
    /**
     * @param string              $type Type of the theme, always “unique_gift”
     * @param UniqueGiftInterface $gift The gift
     */
    public function __construct(
        public string $type,
        public UniqueGiftInterface $gift,
    ) {
    }
}
