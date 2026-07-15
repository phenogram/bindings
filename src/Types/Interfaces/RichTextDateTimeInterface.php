<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Formatted date and time.
 */
interface RichTextDateTimeInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “date_time” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var int $unixTime The Unix time associated with the entity */
    public int $unixTime { set; get; }

    /** @var string $dateTimeFormat The string that defines the formatting of the date and time. See date-time entity formatting for more details. */
    public string $dateTimeFormat { set; get; }
}
