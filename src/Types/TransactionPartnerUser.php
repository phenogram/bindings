<?php

namespace Phenogram\Bindings\Types;

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
     * @param string|null                    $invoicePayload     Optional. Bot-specified invoice payload
     * @param int|null                       $subscriptionPeriod Optional. The duration of the paid subscription
     * @param array<PaidMediaInterface>|null $paidMedia          Optional. Information about the paid media bought by the user
     * @param string|null                    $paidMediaPayload   Optional. Bot-specified paid media payload
     * @param string|null                    $gift               Optional. The gift sent to the user by the bot
     */
    public function __construct(
        public string $type,
        public UserInterface $user,
        public ?string $invoicePayload = null,
        public ?int $subscriptionPeriod = null,
        public ?array $paidMedia = null,
        public ?string $paidMediaPayload = null,
        public ?string $gift = null,
    ) {
    }
}
