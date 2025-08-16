<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostDeclinedInterface;
use Phenogram\Bindings\Types\SuggestedPostDeclined;

class SuggestedPostDeclinedFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostDeclined instance with default fake data.
     *
     * @param MessageInterface|null $suggestedPostMessage Optional. Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null           $comment              Optional. Optional. Comment with which the post was declined
     */
    public static function make(
        ?MessageInterface $suggestedPostMessage = null,
        ?string $comment = null,
    ): SuggestedPostDeclinedInterface {
        return self::factory()->makeSuggestedPostDeclined(
            suggestedPostMessage: $suggestedPostMessage,
            comment: $comment,
        );
    }
}
