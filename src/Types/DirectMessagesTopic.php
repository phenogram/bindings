<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a topic of a direct messages chat.
 */
class DirectMessagesTopic implements Interfaces\DirectMessagesTopicInterface
{
    /**
     * @param int                $topicId Unique identifier of the topic
     * @param UserInterface|null $user    Optional. Information about the user that created the topic. Currently, it is always present
     */
    public function __construct(
        public int $topicId,
        public ?UserInterface $user = null,
    ) {
    }
}
