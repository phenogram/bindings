<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageInterface;

/**
 * Describes a service message about the rejection of a suggested post.
 */
class SuggestedPostDeclined implements Interfaces\SuggestedPostDeclinedInterface
{
    /**
     * @param MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null           $comment              Optional. Comment with which the post was declined
     */
    public function __construct(
        public ?MessageInterface $suggestedPostMessage = null,
        public ?string $comment = null,
    ) {
    }
}
