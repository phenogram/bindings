<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\DocumentFactory as Document;
use Phenogram\Bindings\Types\BackgroundTypePattern;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypePatternInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;

class BackgroundTypePatternFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundTypePattern instance with default fake data.
     *
     * @param string|null                                                       $type       Optional. Type of the background, always “pattern”
     * @param DocumentInterface|null                                            $document   Optional. Document with the pattern
     * @param \Phenogram\Bindings\Types\Interfaces\BackgroundFillInterface|null $fill       Optional. The background fill that is combined with the pattern
     * @param int|null                                                          $intensity  Optional. Intensity of the pattern when it is shown above the filled background; 0-100
     * @param bool|null                                                         $isInverted Optional. Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     * @param bool|null                                                         $isMoving   Optional. Optional. True, if the background moves slightly when the device is tilted
     */
    public static function make(
        ?string $type = null,
        ?DocumentInterface $document = null,
        ?\Phenogram\Bindings\Types\Interfaces\BackgroundFillInterface $fill = null,
        ?int $intensity = null,
        ?bool $isInverted = null,
        ?bool $isMoving = null,
    ): BackgroundTypePatternInterface {
        return self::factory()->makeBackgroundTypePattern(
            type: $type ?? self::fake()->word(),
            document: $document ?? Document::make(),
            fill: $fill ?? '[Abstract type: BackgroundFill]',
            intensity: $intensity ?? self::fake()->randomNumber(),
            isInverted: $isInverted,
            isMoving: $isMoving,
        );
    }
}
