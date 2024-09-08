<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends TransactionPartner
{
    /**
     * @param string                $type             Type of the transaction partner, always “user”
     * @param User                  $user             Information about the user
     * @param string|null           $invoicePayload   Optional. Bot-specified invoice payload
     * @param array<PaidMedia>|null $paidMedia        Optional. Information about the paid media bought by the user
     * @param string|null           $paidMediaPayload Optional. Bot-specified paid media payload
     */
    public function __construct(
        public string $type,
        public User $user,
        public ?string $invoicePayload = null,
        public ?array $paidMedia = null,
        public ?string $paidMediaPayload = null,
    ) {
    }
}
