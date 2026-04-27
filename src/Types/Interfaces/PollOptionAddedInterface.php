<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about an option added to a poll.
 */
interface PollOptionAddedInterface extends TypeInterface
{
    /** @var MaybeInaccessibleMessageInterface|null $pollMessage Optional. Message containing the poll to which the option was added, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MaybeInaccessibleMessageInterface $pollMessage { set; get; }

    /** @var string $optionPersistentId Unique identifier of the added option */
    public string $optionPersistentId { set; get; }

    /** @var string $optionText Option text */
    public string $optionText { set; get; }

    /** @var array<MessageEntityInterface>|null $optionTextEntities Optional. Special entities that appear in the option_text */
    public ?array $optionTextEntities { set; get; }
}
