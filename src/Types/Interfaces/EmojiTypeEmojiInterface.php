<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A regular emoji.
 */
interface EmojiTypeEmojiInterface extends TypeInterface
{
    /** @var string $type Type of the emoji, always “emoji” */
    public string $type { set; get; }

    /** @var string $emoji The emoji */
    public string $emoji { set; get; }
}
