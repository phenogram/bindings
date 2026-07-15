<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextDateTimeInterface;
use Phenogram\Bindings\Types\RichTextDateTime;

class RichTextDateTimeFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextDateTime instance with default fake data.
     *
     * @param string|null                                                 $type           Optional. Type of the rich text, always “date_time”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text           Optional. The text
     * @param int|null                                                    $unixTime       Optional. The Unix time associated with the entity
     * @param string|null                                                 $dateTimeFormat Optional. The string that defines the formatting of the date and time. See date-time entity formatting for more details.
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?int $unixTime = null,
        ?string $dateTimeFormat = null,
    ): RichTextDateTimeInterface {
        return self::factory()->makeRichTextDateTime(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            unixTime: $unixTime ?? self::fake()->randomNumber(),
            dateTimeFormat: $dateTimeFormat ?? self::fake()->text(50),
        );
    }
}
