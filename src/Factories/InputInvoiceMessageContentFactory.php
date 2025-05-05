<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LabeledPriceFactory as LabeledPrice;
use Phenogram\Bindings\Types\InputInvoiceMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputInvoiceMessageContentInterface;

class InputInvoiceMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputInvoiceMessageContent instance with default fake data.
     *
     * @param string|null $title                     Optional. Product name, 1-32 characters
     * @param string|null $description               Optional. Product description, 1-255 characters
     * @param string|null $payload                   Optional. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param string|null $providerToken             Optional. Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     * @param string|null $currency                  Optional. Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
     * @param array|null  $prices                    Optional. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @param int|null    $maxTipAmount              Optional. Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     * @param array|null  $suggestedTipAmounts       Optional. Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string|null $providerData              Optional. Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     * @param string|null $photoUrl                  Optional. Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param int|null    $photoSize                 Optional. Optional. Photo size in bytes
     * @param int|null    $photoWidth                Optional. Optional. Photo width
     * @param int|null    $photoHeight               Optional. Optional. Photo height
     * @param bool|null   $needName                  Optional. Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null   $needPhoneNumber           Optional. Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null   $needEmail                 Optional. Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null   $needShippingAddress       Optional. Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     * @param bool|null   $sendPhoneNumberToProvider Optional. Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null   $sendEmailToProvider       Optional. Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
     * @param bool|null   $isFlexible                Optional. Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     */
    public static function make(
        ?string $title = null,
        ?string $description = null,
        ?string $payload = null,
        ?string $providerToken = null,
        ?string $currency = null,
        ?array $prices = null,
        ?int $maxTipAmount = null,
        ?array $suggestedTipAmounts = null,
        ?string $providerData = null,
        ?string $photoUrl = null,
        ?int $photoSize = null,
        ?int $photoWidth = null,
        ?int $photoHeight = null,
        ?bool $needName = null,
        ?bool $needPhoneNumber = null,
        ?bool $needEmail = null,
        ?bool $needShippingAddress = null,
        ?bool $sendPhoneNumberToProvider = null,
        ?bool $sendEmailToProvider = null,
        ?bool $isFlexible = null,
    ): InputInvoiceMessageContentInterface {
        return self::factory()->makeInputInvoiceMessageContent(
            title: $title ?? self::fake()->sentence(3),
            description: $description ?? self::fake()->sentence(),
            payload: $payload ?? self::fake()->text(50),
            providerToken: $providerToken,
            currency: $currency ?? self::fake()->text(50),
            prices: $prices ?? array_map(fn () => LabeledPrice::make(), range(0, self::fake()->numberBetween(0, 2))),
            maxTipAmount: $maxTipAmount,
            suggestedTipAmounts: $suggestedTipAmounts,
            providerData: $providerData,
            photoUrl: $photoUrl,
            photoSize: $photoSize,
            photoWidth: $photoWidth,
            photoHeight: $photoHeight,
            needName: $needName,
            needPhoneNumber: $needPhoneNumber,
            needEmail: $needEmail,
            needShippingAddress: $needShippingAddress,
            sendPhoneNumberToProvider: $sendPhoneNumberToProvider,
            sendEmailToProvider: $sendEmailToProvider,
            isFlexible: $isFlexible,
        );
    }
}
