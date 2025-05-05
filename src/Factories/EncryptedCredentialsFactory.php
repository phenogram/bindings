<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\EncryptedCredentials;
use Phenogram\Bindings\Types\Interfaces\EncryptedCredentialsInterface;

class EncryptedCredentialsFactory extends AbstractFactory
{
    /**
     * Creates a new EncryptedCredentials instance with default fake data.
     *
     * @param string|null $data   Optional. Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
     * @param string|null $hash   Optional. Base64-encoded data hash for data authentication
     * @param string|null $secret Optional. Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     */
    public static function make(
        ?string $data = null,
        ?string $hash = null,
        ?string $secret = null,
    ): EncryptedCredentialsInterface {
        return self::factory()->makeEncryptedCredentials(
            data: $data ?? self::fake()->text(50),
            hash: $hash ?? self::fake()->text(50),
            secret: $secret ?? self::fake()->text(50),
        );
    }
}
