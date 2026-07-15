<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text with a phone number.
 */
interface RichTextPhoneNumberInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “phone_number” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $phoneNumber The phone number */
    public string $phoneNumber { set; get; }
}
