<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftColorsInterface;
use Phenogram\Bindings\Types\UniqueGiftColors;

class UniqueGiftColorsFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGiftColors instance with default fake data.
     *
     * @param string|null $modelCustomEmojiId    Optional. Custom emoji identifier of the unique gift's model
     * @param string|null $symbolCustomEmojiId   Optional. Custom emoji identifier of the unique gift's symbol
     * @param int|null    $lightThemeMainColor   Optional. Main color used in light themes; RGB format
     * @param array|null  $lightThemeOtherColors Optional. List of 1-3 additional colors used in light themes; RGB format
     * @param int|null    $darkThemeMainColor    Optional. Main color used in dark themes; RGB format
     * @param array|null  $darkThemeOtherColors  Optional. List of 1-3 additional colors used in dark themes; RGB format
     */
    public static function make(
        ?string $modelCustomEmojiId = null,
        ?string $symbolCustomEmojiId = null,
        ?int $lightThemeMainColor = null,
        ?array $lightThemeOtherColors = null,
        ?int $darkThemeMainColor = null,
        ?array $darkThemeOtherColors = null,
    ): UniqueGiftColorsInterface {
        return self::factory()->makeUniqueGiftColors(
            modelCustomEmojiId: $modelCustomEmojiId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            symbolCustomEmojiId: $symbolCustomEmojiId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            lightThemeMainColor: $lightThemeMainColor ?? self::fake()->randomNumber(),
            lightThemeOtherColors: $lightThemeOtherColors ?? self::fake()->randomElements(range(1, 100), self::fake()->numberBetween(1, 5)),
            darkThemeMainColor: $darkThemeMainColor ?? self::fake()->randomNumber(),
            darkThemeOtherColors: $darkThemeOtherColors ?? self::fake()->randomElements(range(1, 100), self::fake()->numberBetween(1, 5)),
        );
    }
}
