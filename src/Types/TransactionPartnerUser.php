<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AffiliateInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends TransactionPartner implements Interfaces\TransactionPartnerUserInterface
{
    /**
     * @param string                         $type               Type of the transaction partner, always “user”
     * @param UserInterface                  $user               Information about the user
     * @param AffiliateInfoInterface|null    $affiliate          Optional. Information about the affiliate that received a commission via this transaction
     * @param string|null                    $invoicePayload     Optional. Bot-specified invoice payload
     * @param int|null                       $subscriptionPeriod Optional. The duration of the paid subscription
     * @param array<PaidMediaInterface>|null $paidMedia          Optional. Information about the paid media bought by the user
     * @param string|null                    $paidMediaPayload   Optional. Bot-specified paid media payload
     * @param GiftInterface|null             $gift               Optional. The gift sent to the user by the bot
     */
    public function __construct(
        public string $type,
        public UserInterface $user,
        public ?AffiliateInfoInterface $affiliate = null,
        public ?string $invoicePayload = null,
        public ?int $subscriptionPeriod = null,
        public ?array $paidMedia = null,
        public ?string $paidMediaPayload = null,
        public ?GiftInterface $gift = null,
    ) {
    }
}
