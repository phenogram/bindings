<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\EncryptedCredentialsInterface;
use Phenogram\Bindings\Types\Interfaces\EncryptedPassportElementInterface;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData implements Interfaces\PassportDataInterface
{
    /**
     * @param array<EncryptedPassportElementInterface> $data        Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param EncryptedCredentialsInterface            $credentials Encrypted credentials required to decrypt the data
     */
    public function __construct(
        public array $data,
        public EncryptedCredentialsInterface $credentials,
    ) {
    }
}
