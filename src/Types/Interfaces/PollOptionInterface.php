<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about one answer option in a poll.
 */
interface PollOptionInterface extends TypeInterface
{
    /** @var string $persistentId Unique identifier of the option, persistent on option addition and deletion */
    public string $persistentId { set; get; }

    /** @var string $text Option text, 1-100 characters */
    public string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $textEntities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts */
    public ?array $textEntities { set; get; }

    /** @var int $voterCount Number of users who voted for this option; may be 0 if unknown */
    public int $voterCount { set; get; }

    /** @var UserInterface|null $addedByUser Optional. User who added the option; omitted if the option wasn't added by a user after poll creation */
    public ?UserInterface $addedByUser { set; get; }

    /** @var ChatInterface|null $addedByChat Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation */
    public ?ChatInterface $addedByChat { set; get; }

    /** @var int|null $additionDate Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll */
    public ?int $additionDate { set; get; }
}
