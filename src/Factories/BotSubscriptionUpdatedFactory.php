<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\BotSubscriptionUpdated;
use Phenogram\Bindings\Types\Interfaces\BotSubscriptionUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class BotSubscriptionUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new BotSubscriptionUpdated instance with default fake data.
     *
     * @param UserInterface|null $user           Optional. User who subscribed for payments toward the bot
     * @param string|null        $invoicePayload Optional. Bot-specified invoice payload
     * @param string|null        $state          Optional. The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
     */
    public static function make(
        ?UserInterface $user = null,
        ?string $invoicePayload = null,
        ?string $state = null,
    ): BotSubscriptionUpdatedInterface {
        return self::factory()->makeBotSubscriptionUpdated(
            user: $user ?? User::make(),
            invoicePayload: $invoicePayload ?? self::fake()->text(50),
            state: $state ?? self::fake()->text(50),
        );
    }
}
