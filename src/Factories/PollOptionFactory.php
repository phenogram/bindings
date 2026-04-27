<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\PollOptionInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\PollOption;

class PollOptionFactory extends AbstractFactory
{
    /**
     * Creates a new PollOption instance with default fake data.
     *
     * @param string|null        $persistentId Optional. Unique identifier of the option, persistent on option addition and deletion
     * @param string|null        $text         Optional. Option text, 1-100 characters
     * @param array|null         $textEntities Optional. Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     * @param int|null           $voterCount   Optional. Number of users who voted for this option; may be 0 if unknown
     * @param UserInterface|null $addedByUser  Optional. Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
     * @param ChatInterface|null $addedByChat  Optional. Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
     * @param int|null           $additionDate Optional. Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
     */
    public static function make(
        ?string $persistentId = null,
        ?string $text = null,
        ?array $textEntities = null,
        ?int $voterCount = null,
        ?UserInterface $addedByUser = null,
        ?ChatInterface $addedByChat = null,
        ?int $additionDate = null,
    ): PollOptionInterface {
        return self::factory()->makePollOption(
            persistentId: $persistentId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            text: $text ?? self::fake()->sentence(),
            textEntities: $textEntities,
            voterCount: $voterCount ?? self::fake()->randomNumber(),
            addedByUser: $addedByUser,
            addedByChat: $addedByChat,
            additionDate: $additionDate,
        );
    }
}
