<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An address in the TON blockchain.
 */
interface RichTextTonAddressInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “ton_address” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Text of the address */
    public RichTextInterface|string|array $text { set; get; }

    /** @var string $address The address */
    public string $address { set; get; }
}
