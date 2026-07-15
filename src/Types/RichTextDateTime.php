<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * Formatted date and time.
 */
class RichTextDateTime extends RichText implements Interfaces\RichTextDateTimeInterface
{
    /**
     * @param string            $type           Type of the rich text, always “date_time”
     * @param RichTextInterface $text           The text
     * @param int               $unixTime       The Unix time associated with the entity
     * @param string            $dateTimeFormat The string that defines the formatting of the date and time. See date-time entity formatting for more details.
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public int $unixTime,
        public string $dateTimeFormat,
    ) {
    }
}
