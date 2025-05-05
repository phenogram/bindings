<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\EncryptedCredentialsFactory as EncryptedCredentials;
use Phenogram\Bindings\Factories\EncryptedPassportElementFactory as EncryptedPassportElement;
use Phenogram\Bindings\Types\Interfaces\EncryptedCredentialsInterface;
use Phenogram\Bindings\Types\Interfaces\PassportDataInterface;
use Phenogram\Bindings\Types\PassportData;

class PassportDataFactory extends AbstractFactory
{
    /**
     * Creates a new PassportData instance with default fake data.
     *
     * @param array|null                         $data        Optional. Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param EncryptedCredentialsInterface|null $credentials Optional. Encrypted credentials required to decrypt the data
     */
    public static function make(
        ?array $data = null,
        ?EncryptedCredentialsInterface $credentials = null,
    ): PassportDataInterface {
        return self::factory()->makePassportData(
            data: $data ?? array_map(fn () => EncryptedPassportElement::make(), range(0, self::fake()->numberBetween(0, 2))),
            credentials: $credentials ?? EncryptedCredentials::make(),
        );
    }
}
