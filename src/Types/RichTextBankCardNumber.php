<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text with a bank card number.
 */
class RichTextBankCardNumber extends RichText implements Interfaces\RichTextBankCardNumberInterface
{
    /**
     * @param string            $type           Type of the rich text, always “bank_card_number”
     * @param RichTextInterface $text           The text
     * @param string            $bankCardNumber The bank card number
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $bankCardNumber,
    ) {
    }
}
