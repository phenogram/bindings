<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\WidgetQueryWalletInterface;

/**
 * The query notifies the bot about a transaction sent from a TON wallet of the user who sent the query.
 */
class WidgetQueryTypeSentTransaction extends WidgetQueryType implements Interfaces\WidgetQueryTypeSentTransactionInterface
{
    /**
     * @param string                     $type    Type of the query, always “sent_transaction”
     * @param WidgetQueryWalletInterface $wallet  The wallet from which the transaction was sent
     * @param string                     $msgHash Value of msg_hash of the transaction
     */
    public function __construct(
        public string $type,
        public WidgetQueryWalletInterface $wallet,
        public string $msgHash,
    ) {
    }
}
