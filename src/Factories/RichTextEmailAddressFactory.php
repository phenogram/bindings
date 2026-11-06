<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextEmailAddressInterface;
use Phenogram\Bindings\Types\RichTextEmailAddress;

class RichTextEmailAddressFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextEmailAddress instance with default fake data.
     *
     * @param string|null                                                              $type         Optional. Type of the rich text, always “email_address”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text         Optional. The text
     * @param string|null                                                              $emailAddress Optional. The email address
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $emailAddress = null,
    ): RichTextEmailAddressInterface {
        return self::factory()->makeRichTextEmailAddress(
            type: $type ?? 'email_address',
            text: $text ?? self::fake()->sentence(),
            emailAddress: $emailAddress ?? self::fake()->text(50),
        );
    }
}
