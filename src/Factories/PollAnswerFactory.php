<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\PollAnswerInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\PollAnswer;

class PollAnswerFactory extends AbstractFactory
{
    /**
     * Creates a new PollAnswer instance with default fake data.
     *
     * @param string|null        $pollId    Optional. Unique poll identifier
     * @param ChatInterface|null $voterChat Optional. Optional. The chat that changed the answer to the poll, if the voter is anonymous
     * @param UserInterface|null $user      Optional. Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     * @param array|null         $optionIds Optional. 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     */
    public static function make(
        ?string $pollId = null,
        ?ChatInterface $voterChat = null,
        ?UserInterface $user = null,
        ?array $optionIds = null,
    ): PollAnswerInterface {
        return self::factory()->makePollAnswer(
            pollId: $pollId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            voterChat: $voterChat,
            user: $user,
            optionIds: $optionIds ?? self::fake()->randomElements(range(1, 100), self::fake()->numberBetween(1, 5)),
        );
    }
}
