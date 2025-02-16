<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 */
interface AffiliateInfoInterface extends TypeInterface
{
    /** @var UserInterface|null $affiliateUser Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user */
    public ?UserInterface $affiliateUser { set; }

    /** @var ChatInterface|null $affiliateChat Optional. The chat that received an affiliate commission if it was received by a chat */
    public ?ChatInterface $affiliateChat { set; }

    /** @var int $commissionPerMille The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users */
    public int $commissionPerMille { set; }

    /** @var int $amount Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds */
    public int $amount { set; }

    /** @var int|null $nanostarAmount Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds */
    public ?int $nanostarAmount { set; }
}
