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
     * @param int|null           $topicId Optional. Unique identifier of the topic
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
