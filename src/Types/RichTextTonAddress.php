<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * An address in the TON blockchain.
 */
class RichTextTonAddress extends RichText implements Interfaces\RichTextTonAddressInterface
{
    /**
     * @param string                                $type    Type of the rich text, always “ton_address”
     * @param RichTextInterface|string|array<mixed> $text    Text of the address
     * @param string                                $address The address
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public string $address,
    ) {
    }
}
