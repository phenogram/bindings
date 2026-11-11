<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TonWalletTransferInterface;
use Phenogram\Bindings\Types\TonWalletTransfer;

class TonWalletTransferFactory extends AbstractFactory
{
    /**
     * Creates a new TonWalletTransfer instance with default fake data.
     *
     * @param string|null $transactionId Optional. Unique identifier of the transaction; may be empty if the transfer hasn't been sent yet
     * @param string|null $peerAddress   Optional. Address of the transfer peer in the TON blockchain
     * @param string|null $amount        Optional. The amount of transferred cryptocurrency, in the smallest units of the cryptocurrency, as a decimal number; negative for outgoing transfers
     * @param string|null $comment       Optional. Optional. Comment added to the transfer; omitted if the comment is encrypted
     */
    public static function make(
        ?string $transactionId = null,
        ?string $peerAddress = null,
        ?string $amount = null,
        ?string $comment = null,
    ): TonWalletTransferInterface {
        return self::factory()->makeTonWalletTransfer(
            transactionId: $transactionId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            peerAddress: $peerAddress ?? self::fake()->text(50),
            amount: $amount ?? self::fake()->text(50),
            comment: $comment,
        );
    }
}
