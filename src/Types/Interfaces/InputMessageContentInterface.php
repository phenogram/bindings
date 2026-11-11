<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following types:
 *
 * @see InputTextMessageContentInterface
 * @see InputRichMessageContentInterface
 * @see InputLocationMessageContentInterface
 * @see InputVenueMessageContentInterface
 * @see InputContactMessageContentInterface
 * @see InputInvoiceMessageContentInterface
 * @see InputWidgetMessageContentInterface
 * @see InputSharedWidgetMessageContentInterface
 */
interface InputMessageContentInterface extends TypeInterface
{
}
