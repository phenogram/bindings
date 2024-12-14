<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
class TransactionPartnerAffiliateProgram extends TransactionPartner implements Interfaces\TransactionPartnerAffiliateProgramInterface
{
    /**
     * @param string             $type               Type of the transaction partner, always “affiliate_program”
     * @param int                $commissionPerMille The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
     * @param UserInterface|null $sponsorUser        Optional. Information about the bot that sponsored the affiliate program
     */
    public function __construct(
        public string $type,
        public int $commissionPerMille,
        public ?UserInterface $sponsorUser = null,
    ) {
    }
}
