<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The query notifies the bot about a transaction sent from a TON wallet of the user who sent the query.
 */
interface WidgetQueryTypeSentTransactionInterface extends TypeInterface
{
    /** @var string $type Type of the query, always “sent_transaction” */
    public string $type { set; get; }

    /** @var WidgetQueryWalletInterface $wallet The wallet from which the transaction was sent */
    public WidgetQueryWalletInterface $wallet { set; get; }

    /** @var string $msgHash Value of msg_hash of the transaction */
    public string $msgHash { set; get; }
}
