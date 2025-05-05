<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TransactionPartnerAffiliateProgramInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\TransactionPartnerAffiliateProgram;

class TransactionPartnerAffiliateProgramFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerAffiliateProgram instance with default fake data.
     *
     * @param string|null        $type               Optional. Type of the transaction partner, always “affiliate_program”
     * @param UserInterface|null $sponsorUser        Optional. Optional. Information about the bot that sponsored the affiliate program
     * @param int|null           $commissionPerMille Optional. The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
     */
    public static function make(
        ?string $type = null,
        ?UserInterface $sponsorUser = null,
        ?int $commissionPerMille = null,
    ): TransactionPartnerAffiliateProgramInterface {
        return self::factory()->makeTransactionPartnerAffiliateProgram(
            type: $type ?? self::fake()->word(),
            sponsorUser: $sponsorUser,
            commissionPerMille: $commissionPerMille ?? self::fake()->randomNumber(),
        );
    }
}
