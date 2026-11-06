<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextPhoneNumberInterface;
use Phenogram\Bindings\Types\RichTextPhoneNumber;

class RichTextPhoneNumberFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextPhoneNumber instance with default fake data.
     *
     * @param string|null                                                              $type        Optional. Type of the rich text, always “phone_number”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text        Optional. The text
     * @param string|null                                                              $phoneNumber Optional. The phone number
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $phoneNumber = null,
    ): RichTextPhoneNumberInterface {
        return self::factory()->makeRichTextPhoneNumber(
            type: $type ?? 'phone_number',
            text: $text ?? self::fake()->sentence(),
            phoneNumber: $phoneNumber ?? self::fake()->phoneNumber(),
        );
    }
}
