<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about changes to a user payment subscription toward the current bot.
 */
interface BotSubscriptionUpdatedInterface extends TypeInterface
{
    /** @var UserInterface $user User who subscribed for payments toward the bot */
    public UserInterface $user { set; get; }

    /** @var string $invoicePayload Bot-specified invoice payload */
    public string $invoicePayload { set; get; }

    /** @var string $state The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed. */
    public string $state { set; get; }
}
