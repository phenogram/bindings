<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 */
interface UniqueGiftColorsInterface extends TypeInterface
{
    /** @var string $modelCustomEmojiId Custom emoji identifier of the unique gift's model */
    public string $modelCustomEmojiId { set; get; }

    /** @var string $symbolCustomEmojiId Custom emoji identifier of the unique gift's symbol */
    public string $symbolCustomEmojiId { set; get; }

    /** @var int $lightThemeMainColor Main color used in light themes; RGB format */
    public int $lightThemeMainColor { set; get; }

    /** @var array<int> $lightThemeOtherColors List of 1-3 additional colors used in light themes; RGB format */
    public array $lightThemeOtherColors { set; get; }

    /** @var int $darkThemeMainColor Main color used in dark themes; RGB format */
    public int $darkThemeMainColor { set; get; }

    /** @var array<int> $darkThemeOtherColors List of 1-3 additional colors used in dark themes; RGB format */
    public array $darkThemeOtherColors { set; get; }
}
