<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\EncryptedPassportElement;
use Phenogram\Bindings\Types\Interfaces\EncryptedPassportElementInterface;
use Phenogram\Bindings\Types\Interfaces\PassportFileInterface;

class EncryptedPassportElementFactory extends AbstractFactory
{
    /**
     * Creates a new EncryptedPassportElement instance with default fake data.
     *
     * @param string|null                $type        Optional. Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     * @param string|null                $data        Optional. Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string|null                $phoneNumber Optional. Optional. User's verified phone number; available only for “phone_number” type
     * @param string|null                $email       Optional. Optional. User's verified email address; available only for “email” type
     * @param array|null                 $files       Optional. Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null $frontSide   Optional. Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null $reverseSide Optional. Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFileInterface|null $selfie      Optional. Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param array|null                 $translation Optional. Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string|null                $hash        Optional. Base64-encoded element hash for using in PassportElementErrorUnspecified
     */
    public static function make(
        ?string $type = null,
        ?string $data = null,
        ?string $phoneNumber = null,
        ?string $email = null,
        ?array $files = null,
        ?PassportFileInterface $frontSide = null,
        ?PassportFileInterface $reverseSide = null,
        ?PassportFileInterface $selfie = null,
        ?array $translation = null,
        ?string $hash = null,
    ): EncryptedPassportElementInterface {
        return self::factory()->makeEncryptedPassportElement(
            type: $type ?? self::fake()->word(),
            data: $data,
            phoneNumber: $phoneNumber,
            email: $email,
            files: $files,
            frontSide: $frontSide,
            reverseSide: $reverseSide,
            selfie: $selfie,
            translation: $translation,
            hash: $hash ?? self::fake()->text(50),
        );
    }
}
