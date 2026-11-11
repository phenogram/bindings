<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WidgetQueryWalletInterface;
use Phenogram\Bindings\Types\WidgetQueryWallet;

class WidgetQueryWalletFactory extends AbstractFactory
{
    /**
     * Creates a new WidgetQueryWallet instance with default fake data.
     *
     * @param string|null $address   Optional. Address of the wallet
     * @param string|null $amount    Optional. Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number
     * @param string|null $publicKey Optional. Optional. Hex-encoded public key of the wallet; omitted if unknown
     * @param string|null $stateInit Optional. Optional. Base64-encoded serialized StateInit of the wallet contract; omitted if and only if public_key is omitted
     */
    public static function make(
        ?string $address = null,
        ?string $amount = null,
        ?string $publicKey = null,
        ?string $stateInit = null,
    ): WidgetQueryWalletInterface {
        return self::factory()->makeWidgetQueryWallet(
            address: $address ?? self::fake()->text(50),
            amount: $amount ?? self::fake()->text(50),
            publicKey: $publicKey,
            stateInit: $stateInit,
        );
    }
}
