<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
interface EncryptedPassportElementInterface extends TypeInterface
{
    /** @var string $type Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”. */
    public string $type { set; get; }

    /** @var string|null $data Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?string $data { set; get; }

    /** @var string|null $phoneNumber Optional. User's verified phone number; available only for “phone_number” type */
    public ?string $phoneNumber { set; get; }

    /** @var string|null $email Optional. User's verified email address; available only for “email” type */
    public ?string $email { set; get; }

    /** @var array<PassportFileInterface>|null $files Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?array $files { set; get; }

    /** @var PassportFileInterface|null $frontSide Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFileInterface $frontSide { set; get; }

    /** @var PassportFileInterface|null $reverseSide Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFileInterface $reverseSide { set; get; }

    /** @var PassportFileInterface|null $selfie Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFileInterface $selfie { set; get; }

    /** @var array<PassportFileInterface>|null $translation Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?array $translation { set; get; }

    /** @var string $hash Base64-encoded element hash for using in PassportElementErrorUnspecified */
    public string $hash { set; get; }
}
