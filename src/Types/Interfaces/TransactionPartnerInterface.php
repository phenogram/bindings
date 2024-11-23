<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of.
 *
 * @see TransactionPartnerUserInterface
 * @see TransactionPartnerFragmentInterface
 * @see TransactionPartnerTelegramAdsInterface
 * @see TransactionPartnerTelegramApiInterface
 * @see TransactionPartnerOtherInterface
 */
interface TransactionPartnerInterface extends TypeInterface
{
}
