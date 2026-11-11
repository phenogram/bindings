<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes a TON wallet of the user, which is used in a query from a widget.
 */
class WidgetQueryWallet implements Interfaces\WidgetQueryWalletInterface
{
    /**
     * @param string      $address   Address of the wallet
     * @param string      $amount    Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number
     * @param string|null $publicKey Optional. Hex-encoded public key of the wallet; omitted if unknown
     * @param string|null $stateInit Optional. Base64-encoded serialized StateInit of the wallet contract; omitted if and only if public_key is omitted
     */
    public function __construct(
        public string $address,
        public string $amount,
        public ?string $publicKey = null,
        public ?string $stateInit = null,
    ) {
    }
}
