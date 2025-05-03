<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about one answer option in a poll.
 */
interface PollOptionInterface extends TypeInterface
{
    /** @var string $text Option text, 1-100 characters */
    public string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $textEntities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts */
    public ?array $textEntities { set; get; }

    /** @var int $voterCount Number of users that voted for this option */
    public int $voterCount { set; get; }
}
