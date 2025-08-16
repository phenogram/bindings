<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Factories\SuggestedPostPriceFactory as SuggestedPostPrice;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostApprovalFailedInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\SuggestedPostApprovalFailed;

class SuggestedPostApprovalFailedFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostApprovalFailed instance with default fake data.
     *
     * @param MessageInterface|null            $suggestedPostMessage Optional. Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param SuggestedPostPriceInterface|null $price                Optional. Expected price of the post
     */
    public static function make(
        ?MessageInterface $suggestedPostMessage = null,
        ?SuggestedPostPriceInterface $price = null,
    ): SuggestedPostApprovalFailedInterface {
        return self::factory()->makeSuggestedPostApprovalFailed(
            suggestedPostMessage: $suggestedPostMessage,
            price: $price ?? SuggestedPostPrice::make(),
        );
    }
}
