<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Community;
use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

class CommunityFactory extends AbstractFactory
{
    /**
     * Creates a new Community instance with default fake data.
     *
     * @param int|null    $id   Optional. Unique identifier for this community. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string|null $name Optional. Name of the community
     */
    public static function make(?int $id = null, ?string $name = null): CommunityInterface
    {
        return self::factory()->makeCommunity(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            name: $name ?? self::fake()->text(50),
        );
    }
}
