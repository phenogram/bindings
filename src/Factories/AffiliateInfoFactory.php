<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\AffiliateInfo;
use Phenogram\Bindings\Types\Interfaces\AffiliateInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class AffiliateInfoFactory extends AbstractFactory
{
    /**
     * Creates a new AffiliateInfo instance with default fake data.
     *
     * @param UserInterface|null $affiliateUser      Optional. Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     * @param ChatInterface|null $affiliateChat      Optional. Optional. The chat that received an affiliate commission if it was received by a chat
     * @param int|null           $commissionPerMille Optional. The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     * @param int|null           $amount             Optional. Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     * @param int|null           $nanostarAmount     Optional. Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
     */
    public static function make(
        ?UserInterface $affiliateUser = null,
        ?ChatInterface $affiliateChat = null,
        ?int $commissionPerMille = null,
        ?int $amount = null,
        ?int $nanostarAmount = null,
    ): AffiliateInfoInterface {
        return self::factory()->makeAffiliateInfo(
            affiliateUser: $affiliateUser,
            affiliateChat: $affiliateChat,
            commissionPerMille: $commissionPerMille ?? self::fake()->randomNumber(),
            amount: $amount ?? self::fake()->randomNumber(),
            nanostarAmount: $nanostarAmount,
        );
    }
}
