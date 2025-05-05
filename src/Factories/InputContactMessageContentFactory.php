<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputContactMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputContactMessageContentInterface;

class InputContactMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputContactMessageContent instance with default fake data.
     *
     * @param string|null $phoneNumber Optional. Contact's phone number
     * @param string|null $firstName   Optional. Contact's first name
     * @param string|null $lastName    Optional. Optional. Contact's last name
     * @param string|null $vcard       Optional. Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    public static function make(
        ?string $phoneNumber = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $vcard = null,
    ): InputContactMessageContentInterface {
        return self::factory()->makeInputContactMessageContent(
            phoneNumber: $phoneNumber ?? self::fake()->phoneNumber(),
            firstName: $firstName ?? self::fake()->firstName(),
            lastName: $lastName,
            vcard: $vcard,
        );
    }
}
