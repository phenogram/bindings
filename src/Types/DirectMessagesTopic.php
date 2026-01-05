<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a topic of a direct messages chat.
 */
class DirectMessagesTopic implements Interfaces\DirectMessagesTopicInterface
{
    /**
     * @param int                $topicId Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param UserInterface|null $user    Optional. Information about the user that created the topic. Currently, it is always present
     */
    public function __construct(
        public int $topicId,
        public ?UserInterface $user = null,
    ) {
    }
}
