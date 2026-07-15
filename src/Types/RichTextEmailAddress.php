<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A text with an email address.
 */
class RichTextEmailAddress extends RichText implements Interfaces\RichTextEmailAddressInterface
{
    /**
     * @param string            $type         Type of the rich text, always “email_address”
     * @param RichTextInterface $text         The text
     * @param string            $emailAddress The email address
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $emailAddress,
    ) {
    }
}
