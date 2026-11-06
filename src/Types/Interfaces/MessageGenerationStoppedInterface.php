<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes an update about a user stopping message generation.
 */
interface MessageGenerationStoppedInterface extends TypeInterface
{
    /** @var ChatInterface $chat Chat in which the message is generated */
    public ChatInterface $chat { set; get; }

    /** @var int|null $messageThreadId Optional. Unique identifier of the message thread in which the message is generated */
    public ?int $messageThreadId { set; get; }

    /** @var int $draftId Unique identifier of the message draft which was stopped */
    public int $draftId { set; get; }
}
