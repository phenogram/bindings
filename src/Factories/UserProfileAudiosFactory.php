<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Types\Interfaces\UserProfileAudiosInterface;
use Phenogram\Bindings\Types\UserProfileAudios;

class UserProfileAudiosFactory extends AbstractFactory
{
    /**
     * Creates a new UserProfileAudios instance with default fake data.
     *
     * @param int|null   $totalCount Optional. Total number of profile audios for the target user
     * @param array|null $audios     Optional. Requested profile audios
     */
    public static function make(?int $totalCount = null, ?array $audios = null): UserProfileAudiosInterface
    {
        return self::factory()->makeUserProfileAudios(
            totalCount: $totalCount ?? self::fake()->randomNumber(),
            audios: $audios ?? array_map(fn () => Audio::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}
