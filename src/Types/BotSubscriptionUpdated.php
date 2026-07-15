<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about changes to a user payment subscription toward the current bot.
 */
class BotSubscriptionUpdated implements Interfaces\BotSubscriptionUpdatedInterface
{
    /**
     * @param UserInterface $user           User who subscribed for payments toward the bot
     * @param string        $invoicePayload Bot-specified invoice payload
     * @param string        $state          The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
     */
    public function __construct(
        public UserInterface $user,
        public string $invoicePayload,
        public string $state,
    ) {
    }
}
