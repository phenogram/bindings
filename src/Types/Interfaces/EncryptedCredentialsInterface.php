<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
interface EncryptedCredentialsInterface extends TypeInterface
{
	/** @var string $data Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication */
	public string $data { set; get; }

	/** @var string $hash Base64-encoded data hash for data authentication */
	public string $hash { set; get; }

	/** @var string $secret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption */
	public string $secret { set; get; }
}
