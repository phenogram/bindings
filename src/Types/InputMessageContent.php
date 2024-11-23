<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 *
 * @see InputTextMessageContent
 * @see InputLocationMessageContent
 * @see InputVenueMessageContent
 * @see InputContactMessageContent
 * @see InputInvoiceMessageContent
 */
abstract class InputMessageContent implements Interfaces\InputMessageContentInterface
{
    public function __construct()
    {
    }
}
