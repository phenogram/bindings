<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Contact;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;

class ContactFactory extends AbstractFactory
{
    /**
     * Creates a new Contact instance with default fake data.
     *
     * @param string|null $phoneNumber Optional. Contact's phone number
     * @param string|null $firstName   Optional. Contact's first name
     * @param string|null $lastName    Optional. Optional. Contact's last name
     * @param int|null    $userId      Optional. Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string|null $vcard       Optional. Optional. Additional data about the contact in the form of a vCard
     */
    public static function make(
        ?string $phoneNumber = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?int $userId = null,
        ?string $vcard = null,
    ): ContactInterface {
        return self::factory()->makeContact(
            phoneNumber: $phoneNumber ?? self::fake()->phoneNumber(),
            firstName: $firstName ?? self::fake()->firstName(),
            lastName: $lastName,
            userId: $userId,
            vcard: $vcard,
        );
    }
}
