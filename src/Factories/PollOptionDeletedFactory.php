<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PollOptionDeletedInterface;
use Phenogram\Bindings\Types\PollOptionDeleted;

class PollOptionDeletedFactory extends AbstractFactory
{
    /**
     * Creates a new PollOptionDeleted instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface|null $pollMessage        Optional. Optional. Message containing the poll from which the option was deleted, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null                                                                 $optionPersistentId Optional. Unique identifier of the deleted option
     * @param string|null                                                                 $optionText         Optional. Option text
     * @param array|null                                                                  $optionTextEntities Optional. Optional. Special entities that appear in the option_text
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface $pollMessage = null,
        ?string $optionPersistentId = null,
        ?string $optionText = null,
        ?array $optionTextEntities = null,
    ): PollOptionDeletedInterface {
        return self::factory()->makePollOptionDeleted(
            pollMessage: $pollMessage,
            optionPersistentId: $optionPersistentId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            optionText: $optionText ?? self::fake()->text(50),
            optionTextEntities: $optionTextEntities,
        );
    }
}
