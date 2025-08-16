<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about the approval of a suggested post.
 */
interface SuggestedPostApprovedInterface extends TypeInterface
{
    /** @var MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $suggestedPostMessage { set; get; }

    /** @var SuggestedPostPriceInterface|null $price Optional. Amount paid for the post */
    public ?SuggestedPostPriceInterface $price { set; get; }

    /** @var int $sendDate Date when the post will be published */
    public int $sendDate { set; get; }
}
