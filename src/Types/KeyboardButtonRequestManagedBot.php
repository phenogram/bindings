<?php

namespace Phenogram\Bindings\Types;

/**
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update managed_bot and a Message with the field managed_bot_created.
 */
class KeyboardButtonRequestManagedBot implements Interfaces\KeyboardButtonRequestManagedBotInterface
{
    /**
     * @param int         $requestId         Signed 32-bit identifier of the request. Must be unique within the message
     * @param string|null $suggestedName     Optional. Suggested name for the bot
     * @param string|null $suggestedUsername Optional. Suggested username for the bot
     */
    public function __construct(
        public int $requestId,
        public ?string $suggestedName = null,
        public ?string $suggestedUsername = null,
    ) {
    }
}
