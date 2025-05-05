<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\PaidMediaInfo;

class PaidMediaInfoFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaInfo instance with default fake data.
     *
     * @param int|null   $starCount Optional. The number of Telegram Stars that must be paid to buy access to the media
     * @param array|null $paidMedia Optional. Information about the paid media
     */
    public static function make(?int $starCount = null, ?array $paidMedia = null): PaidMediaInfoInterface
    {
        return self::factory()->makePaidMediaInfo(
            starCount: $starCount ?? self::fake()->randomNumber(),
            paidMedia: $paidMedia ?? [],
        );
    }
}
