<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BackgroundTypeFill;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeFillInterface;

class BackgroundTypeFillFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundTypeFill instance with default fake data.
     *
     * @param string|null                                                       $type             Optional. Type of the background, always “fill”
     * @param \Phenogram\Bindings\Types\Interfaces\BackgroundFillInterface|null $fill             Optional. The background fill
     * @param int|null                                                          $darkThemeDimming Optional. Dimming of the background in dark themes, as a percentage; 0-100
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\BackgroundFillInterface $fill = null,
        ?int $darkThemeDimming = null,
    ): BackgroundTypeFillInterface {
        return self::factory()->makeBackgroundTypeFill(
            type: $type ?? self::fake()->word(),
            fill: $fill ?? '[Abstract type: BackgroundFill]',
            darkThemeDimming: $darkThemeDimming ?? self::fake()->randomNumber(),
        );
    }
}
