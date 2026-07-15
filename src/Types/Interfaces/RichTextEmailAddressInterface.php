<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text with an email address.
 */
interface RichTextEmailAddressInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “email_address” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $emailAddress The email address */
    public string $emailAddress { set; get; }
}
