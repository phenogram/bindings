<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LabeledPriceInterface;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
class InputInvoiceMessageContent extends InputMessageContent implements Interfaces\InputInvoiceMessageContentInterface
{
    /**
     * @param string                       $title                     Product name, 1-32 characters
     * @param string                       $description               Product description, 1-255 characters
     * @param string                       $payload                   Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param string                       $currency                  Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
     * @param array<LabeledPriceInterface> $prices                    Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @param string|null                  $providerToken             Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     * @param int|null                     $maxTipAmount              Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     * @param array<int>|null              $suggestedTipAmounts       Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string|null                  $providerData              Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     * @param string|null                  $photoUrl                  Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param int|null                     $photoSize                 Optional. Photo size in bytes
     * @param int|null                     $photoWidth                Optional. Photo width
     * @param int|null                     $photoHeight               Optional. Photo height
     * @param bool|null                    $needName                  Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null                    $needPhoneNumber           Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null                    $needEmail                 Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null                    $needShippingAddress       Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null                    $sendPhoneNumberToProvider Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null                    $sendEmailToProvider       Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null                    $isFlexible                Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     */
    public function __construct(
        public string $title,
        public string $description,
        public string $payload,
        public string $currency,
        public array $prices,
        public ?string $providerToken = null,
        public ?int $maxTipAmount = null,
        public ?array $suggestedTipAmounts = null,
        public ?string $providerData = null,
        public ?string $photoUrl = null,
        public ?int $photoSize = null,
        public ?int $photoWidth = null,
        public ?int $photoHeight = null,
        public ?bool $needName = null,
        public ?bool $needPhoneNumber = null,
        public ?bool $needEmail = null,
        public ?bool $needShippingAddress = null,
        public ?bool $sendPhoneNumberToProvider = null,
        public ?bool $sendEmailToProvider = null,
        public ?bool $isFlexible = null,
    ) {
    }
}
