<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a poll.
 */
interface PollInterface extends TypeInterface
{
    /** @var string $id Unique poll identifier */
    public string $id { set; }

    /** @var string $question Poll question, 1-300 characters */
    public string $question { set; }

    /** @var array<MessageEntityInterface>|null $questionEntities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions */
    public ?array $questionEntities { set; }

    /** @var array<PollOptionInterface> $options List of poll options */
    public array $options { set; }

    /** @var int $totalVoterCount Total number of users that voted in the poll */
    public int $totalVoterCount { set; }

    /** @var bool $isClosed True, if the poll is closed */
    public bool $isClosed { set; }

    /** @var bool $isAnonymous True, if the poll is anonymous */
    public bool $isAnonymous { set; }

    /** @var string $type Poll type, currently can be “regular” or “quiz” */
    public string $type { set; }

    /** @var bool $allowsMultipleAnswers True, if the poll allows multiple answers */
    public bool $allowsMultipleAnswers { set; }

    /** @var int|null $correctOptionId Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot. */
    public ?int $correctOptionId { set; }

    /** @var string|null $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters */
    public ?string $explanation { set; }

    /** @var array<MessageEntityInterface>|null $explanationEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation */
    public ?array $explanationEntities { set; }

    /** @var int|null $openPeriod Optional. Amount of time in seconds the poll will be active after creation */
    public ?int $openPeriod { set; }

    /** @var int|null $closeDate Optional. Point in time (Unix timestamp) when the poll will be automatically closed */
    public ?int $closeDate { set; }
}
