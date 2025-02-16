<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
interface ChosenInlineResultInterface extends TypeInterface
{
    /** @var string $resultId The unique identifier for the result that was chosen */
    public string $resultId { set; }

    /** @var UserInterface $from The user that chose the result */
    public UserInterface $from { set; }

    /** @var LocationInterface|null $location Optional. Sender location, only for bots that require user location */
    public ?LocationInterface $location { set; }

    /** @var string|null $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message. */
    public ?string $inlineMessageId { set; }

    /** @var string $query The query that was used to obtain the result */
    public string $query { set; }
}
