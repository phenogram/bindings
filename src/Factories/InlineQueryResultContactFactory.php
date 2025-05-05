<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultContact;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultContactInterface;

class InlineQueryResultContactFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultContact instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be contact
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 Bytes
     * @param string|null                                                            $phoneNumber         Optional. Contact's phone number
     * @param string|null                                                            $firstName           Optional. Contact's first name
     * @param string|null                                                            $lastName            Optional. Optional. Contact's last name
     * @param string|null                                                            $vcard               Optional. Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the contact
     * @param string|null                                                            $thumbnailUrl        Optional. Optional. Url of the thumbnail for the result
     * @param int|null                                                               $thumbnailWidth      Optional. Optional. Thumbnail width
     * @param int|null                                                               $thumbnailHeight     Optional. Optional. Thumbnail height
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $phoneNumber = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $vcard = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
        ?string $thumbnailUrl = null,
        ?int $thumbnailWidth = null,
        ?int $thumbnailHeight = null,
    ): InlineQueryResultContactInterface {
        return self::factory()->makeInlineQueryResultContact(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            phoneNumber: $phoneNumber ?? self::fake()->phoneNumber(),
            firstName: $firstName ?? self::fake()->firstName(),
            lastName: $lastName,
            vcard: $vcard,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }
}
