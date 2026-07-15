<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text with a bank card number.
 */
interface RichTextBankCardNumberInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “bank_card_number” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $bankCardNumber The bank card number */
    public string $bankCardNumber { set; get; }
}
