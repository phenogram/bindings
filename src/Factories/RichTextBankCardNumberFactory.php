<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextBankCardNumberInterface;
use Phenogram\Bindings\Types\RichTextBankCardNumber;

class RichTextBankCardNumberFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextBankCardNumber instance with default fake data.
     *
     * @param string|null                                                 $type           Optional. Type of the rich text, always “bank_card_number”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text           Optional. The text
     * @param string|null                                                 $bankCardNumber Optional. The bank card number
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $bankCardNumber = null,
    ): RichTextBankCardNumberInterface {
        return self::factory()->makeRichTextBankCardNumber(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            bankCardNumber: $bankCardNumber ?? self::fake()->text(50),
        );
    }
}
