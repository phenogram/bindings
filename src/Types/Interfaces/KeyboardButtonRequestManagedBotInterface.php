<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update managed_bot and a Message with the field managed_bot_created.
 */
interface KeyboardButtonRequestManagedBotInterface extends TypeInterface
{
    /** @var int $requestId Signed 32-bit identifier of the request. Must be unique within the message */
    public int $requestId { set; get; }

    /** @var string|null $suggestedName Optional. Suggested name for the bot */
    public ?string $suggestedName { set; get; }

    /** @var string|null $suggestedUsername Optional. Suggested username for the bot */
    public ?string $suggestedUsername { set; get; }
}
