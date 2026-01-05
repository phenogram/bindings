<?php

namespace Phenogram\Bindings\Types;

/**
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 */
class UniqueGiftColors implements Interfaces\UniqueGiftColorsInterface
{
    /**
     * @param string     $modelCustomEmojiId    Custom emoji identifier of the unique gift's model
     * @param string     $symbolCustomEmojiId   Custom emoji identifier of the unique gift's symbol
     * @param int        $lightThemeMainColor   Main color used in light themes; RGB format
     * @param array<int> $lightThemeOtherColors List of 1-3 additional colors used in light themes; RGB format
     * @param int        $darkThemeMainColor    Main color used in dark themes; RGB format
     * @param array<int> $darkThemeOtherColors  List of 1-3 additional colors used in dark themes; RGB format
     */
    public function __construct(
        public string $modelCustomEmojiId,
        public string $symbolCustomEmojiId,
        public int $lightThemeMainColor,
        public array $lightThemeOtherColors,
        public int $darkThemeMainColor,
        public array $darkThemeOtherColors,
    ) {
    }
}
