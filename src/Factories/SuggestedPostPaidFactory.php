<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\StarAmountInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPaidInterface;
use Phenogram\Bindings\Types\SuggestedPostPaid;

class SuggestedPostPaidFactory extends AbstractFactory
{
    /**
     * Creates a new SuggestedPostPaid instance with default fake data.
     *
     * @param MessageInterface|null    $suggestedPostMessage Optional. Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     * @param string|null              $currency             Optional. Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
     * @param int|null                 $amount               Optional. Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
     * @param StarAmountInterface|null $starAmount           Optional. Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
     */
    public static function make(
        ?MessageInterface $suggestedPostMessage = null,
        ?string $currency = null,
        ?int $amount = null,
        ?StarAmountInterface $starAmount = null,
    ): SuggestedPostPaidInterface {
        return self::factory()->makeSuggestedPostPaid(
            suggestedPostMessage: $suggestedPostMessage,
            currency: $currency ?? self::fake()->text(50),
            amount: $amount,
            starAmount: $starAmount,
        );
    }
}
