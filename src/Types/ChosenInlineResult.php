<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult implements Interfaces\ChosenInlineResultInterface
{
    /**
     * @param string                 $resultId        The unique identifier for the result that was chosen
     * @param UserInterface          $from            The user that chose the result
     * @param string                 $query           The query that was used to obtain the result
     * @param LocationInterface|null $location        Optional. Sender location, only for bots that require user location
     * @param string|null            $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
     */
    public function __construct(
        public string $resultId,
        public UserInterface $from,
        public string $query,
        public ?LocationInterface $location = null,
        public ?string $inlineMessageId = null,
    ) {
    }
}
