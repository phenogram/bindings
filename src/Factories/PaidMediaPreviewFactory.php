<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PaidMediaPreviewInterface;
use Phenogram\Bindings\Types\PaidMediaPreview;

class PaidMediaPreviewFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaPreview instance with default fake data.
     *
     * @param string|null $type     Optional. Type of the paid media, always “preview”
     * @param int|null    $width    Optional. Optional. Media width as defined by the sender
     * @param int|null    $height   Optional. Optional. Media height as defined by the sender
     * @param int|null    $duration Optional. Optional. Duration of the media in seconds as defined by the sender
     */
    public static function make(
        ?string $type = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
    ): PaidMediaPreviewInterface {
        return self::factory()->makePaidMediaPreview(
            type: $type ?? self::fake()->word(),
            width: $width,
            height: $height,
            duration: $duration,
        );
    }
}
