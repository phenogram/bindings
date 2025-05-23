<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
class EncryptedCredentials implements Interfaces\EncryptedCredentialsInterface
{
    /**
     * @param string $data   Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
     * @param string $hash   Base64-encoded data hash for data authentication
     * @param string $secret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     */
    public function __construct(
        public string $data,
        public string $hash,
        public string $secret,
    ) {
    }
}
