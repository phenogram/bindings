<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 */
class AffiliateInfo implements Interfaces\AffiliateInfoInterface
{
    /**
     * @param int                $commissionPerMille The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     * @param int                $amount             Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     * @param UserInterface|null $affiliateUser      Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     * @param ChatInterface|null $affiliateChat      Optional. The chat that received an affiliate commission if it was received by a chat
     * @param int|null           $nanostarAmount     Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
     */
    public function __construct(
        public int $commissionPerMille,
        public int $amount,
        public ?UserInterface $affiliateUser = null,
        public ?ChatInterface $affiliateChat = null,
        public ?int $nanostarAmount = null,
    ) {
    }
}
