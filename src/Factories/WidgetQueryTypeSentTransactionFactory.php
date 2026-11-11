<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\WidgetQueryWalletFactory as WidgetQueryWallet;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeSentTransactionInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryWalletInterface;
use Phenogram\Bindings\Types\WidgetQueryTypeSentTransaction;

class WidgetQueryTypeSentTransactionFactory extends AbstractFactory
{
    /**
     * Creates a new WidgetQueryTypeSentTransaction instance with default fake data.
     *
     * @param string|null                     $type    Optional. Type of the query, always “sent_transaction”
     * @param WidgetQueryWalletInterface|null $wallet  Optional. The wallet from which the transaction was sent
     * @param string|null                     $msgHash Optional. Value of msg_hash of the transaction
     */
    public static function make(
        ?string $type = null,
        ?WidgetQueryWalletInterface $wallet = null,
        ?string $msgHash = null,
    ): WidgetQueryTypeSentTransactionInterface {
        return self::factory()->makeWidgetQueryTypeSentTransaction(
            type: $type ?? 'sent_transaction',
            wallet: $wallet ?? WidgetQueryWallet::make(),
            msgHash: $msgHash ?? self::fake()->sha1(),
        );
    }
}
