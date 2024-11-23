<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of.
 *
 * @see TransactionPartnerUser
 * @see TransactionPartnerFragment
 * @see TransactionPartnerTelegramAds
 * @see TransactionPartnerTelegramApi
 * @see TransactionPartnerOther
 */
abstract class TransactionPartner implements Interfaces\TransactionPartnerInterface
{
}
