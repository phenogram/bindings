<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption implements Interfaces\PollOptionInterface
{
    /**
     * @param string                             $persistentId Unique identifier of the option, persistent on option addition and deletion
     * @param string                             $text         Option text, 1-100 characters
     * @param int                                $voterCount   Number of users who voted for this option; may be 0 if unknown
     * @param array<MessageEntityInterface>|null $textEntities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     * @param UserInterface|null                 $addedByUser  Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
     * @param ChatInterface|null                 $addedByChat  Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
     * @param int|null                           $additionDate Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
     */
    public function __construct(
        public string $persistentId,
        public string $text,
        public int $voterCount,
        public ?array $textEntities = null,
        public ?UserInterface $addedByUser = null,
        public ?ChatInterface $addedByChat = null,
        public ?int $additionDate = null,
    ) {
    }
}
