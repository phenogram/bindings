<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
 * @see PassportElementErrorDataFieldInterface
 * @see PassportElementErrorFrontSideInterface
 * @see PassportElementErrorReverseSideInterface
 * @see PassportElementErrorSelfieInterface
 * @see PassportElementErrorFileInterface
 * @see PassportElementErrorFilesInterface
 * @see PassportElementErrorTranslationFileInterface
 * @see PassportElementErrorTranslationFilesInterface
 * @see PassportElementErrorUnspecifiedInterface
 */
interface PassportElementErrorInterface extends TypeInterface
{
}
