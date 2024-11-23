<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PassportFileInterface;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement implements Interfaces\EncryptedPassportElementInterface
{
    /**
     * @param string                            $type        Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     * @param string                            $hash        Base64-encoded element hash for using in PassportElementErrorUnspecified
     * @param string|null                       $data        Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string|null                       $phoneNumber Optional. User's verified phone number; available only for “phone_number” type
     * @param string|null                       $email       Optional. User's verified email address; available only for “email” type
     * @param array<PassportFileInterface>|null $files       Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null        $frontSide   Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null        $reverseSide Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null        $selfie      Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param array<PassportFileInterface>|null $translation Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public function __construct(
        public string $type,
        public string $hash,
        public ?string $data = null,
        public ?string $phoneNumber = null,
        public ?string $email = null,
        public ?array $files = null,
        public ?PassportFileInterface $frontSide = null,
        public ?PassportFileInterface $reverseSide = null,
        public ?PassportFileInterface $selfie = null,
        public ?array $translation = null,
    ) {
    }
}
