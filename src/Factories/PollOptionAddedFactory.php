<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PollOptionAddedInterface;
use Phenogram\Bindings\Types\PollOptionAdded;

class PollOptionAddedFactory extends AbstractFactory
{
    /**
     * Creates a new PollOptionAdded instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface|null $pollMessage        Optional. Optional. Message containing the poll to which the option was added, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null                                                                 $optionPersistentId Optional. Unique identifier of the added option
     * @param string|null                                                                 $optionText         Optional. Option text
     * @param array|null                                                                  $optionTextEntities Optional. Optional. Special entities that appear in the option_text
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface $pollMessage = null,
        ?string $optionPersistentId = null,
        ?string $optionText = null,
        ?array $optionTextEntities = null,
    ): PollOptionAddedInterface {
        return self::factory()->makePollOptionAdded(
            pollMessage: $pollMessage,
            optionPersistentId: $optionPersistentId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            optionText: $optionText ?? self::fake()->text(50),
            optionTextEntities: $optionTextEntities,
        );
    }
}
