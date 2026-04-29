<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a service message about an option deleted from a poll.
 */
class PollOptionDeleted implements Interfaces\PollOptionDeletedInterface
{
    /**
     * @param string                                 $optionPersistentId Unique identifier of the deleted option
     * @param string                                 $optionText         Option text
     * @param MaybeInaccessibleMessageInterface|null $pollMessage        Optional. Message containing the poll from which the option was deleted, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param array<MessageEntityInterface>|null     $optionTextEntities Optional. Special entities that appear in the option_text
     */
    public function __construct(
        public string $optionPersistentId,
        public string $optionText,
        public ?MaybeInaccessibleMessageInterface $pollMessage = null,
        public ?array $optionTextEntities = null,
    ) {
    }
}
