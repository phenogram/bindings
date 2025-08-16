<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 */
interface SuggestedPostApprovalFailedInterface extends TypeInterface
{
    /** @var MessageInterface|null $suggestedPostMessage Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply. */
    public ?MessageInterface $suggestedPostMessage { set; get; }

    /** @var SuggestedPostPriceInterface $price Expected price of the post */
    public SuggestedPostPriceInterface $price { set; get; }
}
