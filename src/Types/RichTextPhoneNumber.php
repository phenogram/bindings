<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text with a phone number.
 */
class RichTextPhoneNumber extends RichText implements Interfaces\RichTextPhoneNumberInterface
{
    /**
     * @param string            $type        Type of the rich text, always “phone_number”
     * @param RichTextInterface $text        The text
     * @param string            $phoneNumber The phone number
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $phoneNumber,
    ) {
    }
}
