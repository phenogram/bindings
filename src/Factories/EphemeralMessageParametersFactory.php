<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\EphemeralMessageParameters;
use Phenogram\Bindings\Types\Interfaces\EphemeralMessageParametersInterface;

class EphemeralMessageParametersFactory extends AbstractFactory
{
    /**
     * Creates a new EphemeralMessageParameters instance with default fake data.
     *
     * @param int|null    $receiverUserId              Optional. Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See here for more details.
     * @param string|null $callbackQueryId             Optional. Optional. Identifier of the callback query which triggered the message, if any
     * @param bool|null   $replaceCallbackQueryMessage Optional. Optional. Pass True if the ephemeral message must be shown in place of the original message. Must be False for callback queries from ephemeral messages, which must be edited using regular editEphemeralMessage… methods.
     */
    public static function make(
        ?int $receiverUserId = null,
        ?string $callbackQueryId = null,
        ?bool $replaceCallbackQueryMessage = null,
    ): EphemeralMessageParametersInterface {
        return self::factory()->makeEphemeralMessageParameters(
            receiverUserId: $receiverUserId ?? self::fake()->numberBetween(100000, 999999999),
            callbackQueryId: $callbackQueryId,
            replaceCallbackQueryMessage: $replaceCallbackQueryMessage,
        );
    }
}
