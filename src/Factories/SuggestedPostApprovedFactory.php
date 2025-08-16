<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostApprovedInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\SuggestedPostApproved;

class SuggestedPostApprovedFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostApproved instance with default fake data.
     *
     * @param MessageInterface|null            $suggestedPostMessage Optional. Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param SuggestedPostPriceInterface|null $price                Optional. Optional. Amount paid for the post
     * @param int|null                         $sendDate             Optional. Date when the post will be published
     */
    public static function make(
        ?MessageInterface $suggestedPostMessage = null,
        ?SuggestedPostPriceInterface $price = null,
        ?int $sendDate = null,
    ): SuggestedPostApprovedInterface {
        return self::factory()->makeSuggestedPostApproved(
            suggestedPostMessage: $suggestedPostMessage,
            price: $price,
            sendDate: $sendDate ?? self::fake()->unixTime(),
        );
    }
}
