<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 *
 * @see InputTextMessageContentInterface
 * @see InputLocationMessageContentInterface
 * @see InputVenueMessageContentInterface
 * @see InputContactMessageContentInterface
 * @see InputInvoiceMessageContentInterface
 */
interface InputMessageContentInterface extends TypeInterface
{
}
