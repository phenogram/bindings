<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\VideoFactory as Video;
use Phenogram\Bindings\Types\Interfaces\PaidMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\PaidMediaVideo;

class PaidMediaVideoFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaVideo instance with default fake data.
     *
     * @param string|null         $type  Optional. Type of the paid media, always “video”
     * @param VideoInterface|null $video Optional. The video
     */
    public static function make(?string $type = null, ?VideoInterface $video = null): PaidMediaVideoInterface
    {
        return self::factory()->makePaidMediaVideo(
            type: $type ?? self::fake()->word(),
            video: $video ?? Video::make(),
        );
    }
}
