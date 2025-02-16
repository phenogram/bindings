<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
interface TransactionPartnerAffiliateProgramInterface extends TypeInterface
{
    /** @var string $type Type of the transaction partner, always “affiliate_program” */
    public string $type { set; }

    /** @var UserInterface|null $sponsorUser Optional. Information about the bot that sponsored the affiliate program */
    public ?UserInterface $sponsorUser { set; }

    /** @var int $commissionPerMille The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users */
    public int $commissionPerMille { set; }
}
