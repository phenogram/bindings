<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The theme based on a unique gift owned by the user or the chat.
 */
interface ChatShareThemeUniqueGiftInterface extends TypeInterface
{
    /** @var string $type Type of the theme, always “unique_gift” */
    public string $type { set; get; }

    /** @var UniqueGiftInterface $gift The gift */
    public UniqueGiftInterface $gift { set; get; }
}
