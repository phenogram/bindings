<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatBoostSourceGiftCode;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourceGiftCodeInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatBoostSourceGiftCodeFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostSourceGiftCode instance with default fake data.
     *
     * @param string|null        $source Optional. Source of the boost, always “gift_code”
     * @param UserInterface|null $user   Optional. User for which the gift code was created
     */
    public static function make(?string $source = null, ?UserInterface $user = null): ChatBoostSourceGiftCodeInterface
    {
        return self::factory()->makeChatBoostSourceGiftCode(
            source: $source ?? self::fake()->text(50),
            user: $user ?? User::make(),
        );
    }
}
