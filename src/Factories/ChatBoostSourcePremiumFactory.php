<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatBoostSourcePremium;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourcePremiumInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatBoostSourcePremiumFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostSourcePremium instance with default fake data.
     *
     * @param string|null        $source Optional. Source of the boost, always “premium”
     * @param UserInterface|null $user   Optional. User that boosted the chat
     */
    public static function make(?string $source = null, ?UserInterface $user = null): ChatBoostSourcePremiumInterface
    {
        return self::factory()->makeChatBoostSourcePremium(
            source: $source ?? self::fake()->text(50),
            user: $user ?? User::make(),
        );
    }
}
