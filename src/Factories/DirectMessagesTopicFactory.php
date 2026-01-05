<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\DirectMessagesTopic;
use Phenogram\Bindings\Types\Interfaces\DirectMessagesTopicInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class DirectMessagesTopicFactory extends AbstractFactory
{
    /**
     * Creates a new DirectMessagesTopic instance with default fake data.
     *
     * @param int|null           $topicId Optional. Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param UserInterface|null $user    Optional. Optional. Information about the user that created the topic. Currently, it is always present
     */
    public static function make(?int $topicId = null, ?UserInterface $user = null): DirectMessagesTopicInterface
    {
        return self::factory()->makeDirectMessagesTopic(
            topicId: $topicId ?? self::fake()->numberBetween(100000, 999999999),
            user: $user,
        );
    }
}
