<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object describes an update about a user stopping message generation.
 */
class MessageGenerationStopped implements Interfaces\MessageGenerationStoppedInterface
{
    /**
     * @param ChatInterface $chat            Chat in which the message is generated
     * @param int           $draftId         Unique identifier of the message draft which was stopped
     * @param int|null      $messageThreadId Optional. Unique identifier of the message thread in which the message is generated
     */
    public function __construct(
        public ChatInterface $chat,
        public int $draftId,
        public ?int $messageThreadId = null,
    ) {
    }
}
