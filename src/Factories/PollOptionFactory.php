<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PollOptionInterface;
use Phenogram\Bindings\Types\PollOption;

class PollOptionFactory extends AbstractFactory
{
    /**
     * Creates a new PollOption instance with default fake data.
     *
     * @param string|null $text         Optional. Option text, 1-100 characters
     * @param array|null  $textEntities Optional. Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     * @param int|null    $voterCount   Optional. Number of users that voted for this option
     */
    public static function make(
        ?string $text = null,
        ?array $textEntities = null,
        ?int $voterCount = null,
    ): PollOptionInterface {
        return self::factory()->makePollOption(
            text: $text ?? self::fake()->sentence(),
            textEntities: $textEntities,
            voterCount: $voterCount ?? self::fake()->randomNumber(),
        );
    }
}
