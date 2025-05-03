<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
interface PassportDataInterface extends TypeInterface
{
    /** @var array<EncryptedPassportElementInterface> $data Array with information about documents and other Telegram Passport elements that was shared with the bot */
    public array $data { set; get; }

    /** @var EncryptedCredentialsInterface $credentials Encrypted credentials required to decrypt the data */
    public EncryptedCredentialsInterface $credentials { set; get; }
}
