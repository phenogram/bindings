<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Describes a service message about an option added to a poll.
 */
class PollOptionAdded implements Interfaces\PollOptionAddedInterface
{
    /**
     * @param string                                 $optionPersistentId Unique identifier of the added option
     * @param string                                 $optionText         Option text
     * @param MaybeInaccessibleMessageInterface|null $pollMessage        Optional. Message containing the poll to which the option was added, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
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
