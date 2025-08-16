<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a topic of a direct messages chat.
 */
interface DirectMessagesTopicInterface extends TypeInterface
{
    /** @var int $topicId Unique identifier of the topic */
    public int $topicId { set; get; }

    /** @var UserInterface|null $user Optional. Information about the user that created the topic. Currently, it is always present */
    public ?UserInterface $user { set; get; }
}
