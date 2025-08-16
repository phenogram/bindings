<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about the rejection of a suggested post.
 */
interface SuggestedPostDeclinedInterface extends TypeInterface
{
    /** @var MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $suggestedPostMessage { set; get; }

    /** @var string|null $comment Optional. Comment with which the post was declined */
    public ?string $comment { set; get; }
}
