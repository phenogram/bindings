<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a poll.
 */
interface PollInterface extends TypeInterface
{
    /** @var string $id Unique poll identifier */
    public string $id { set; get; }

    /** @var string $question Poll question, 1-300 characters */
    public string $question { set; get; }

    /** @var array<MessageEntityInterface>|null $questionEntities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions */
    public ?array $questionEntities { set; get; }

    /** @var array<PollOptionInterface> $options List of poll options */
    public array $options { set; get; }

    /** @var int $totalVoterCount Total number of users that voted in the poll */
    public int $totalVoterCount { set; get; }

    /** @var bool $isClosed True, if the poll is closed */
    public bool $isClosed { set; get; }

    /** @var bool $isAnonymous True, if the poll is anonymous */
    public bool $isAnonymous { set; get; }

    /** @var string $type Poll type, currently can be “regular” or “quiz” */
    public string $type { set; get; }

    /** @var bool $allowsMultipleAnswers True, if the poll allows multiple answers */
    public bool $allowsMultipleAnswers { set; get; }

    /** @var bool $allowsRevoting True, if the poll allows to change the chosen answer options */
    public bool $allowsRevoting { set; get; }

    /** @var array<int>|null $correctOptionIds Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot. */
    public ?array $correctOptionIds { set; get; }

    /** @var string|null $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters */
    public ?string $explanation { set; get; }

    /** @var array<MessageEntityInterface>|null $explanationEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation */
    public ?array $explanationEntities { set; get; }

    /** @var int|null $openPeriod Optional. Amount of time in seconds the poll will be active after creation */
    public ?int $openPeriod { set; get; }

    /** @var int|null $closeDate Optional. Point in time (Unix timestamp) when the poll will be automatically closed */
    public ?int $closeDate { set; get; }

    /** @var string|null $description Optional. Description of the poll; for polls inside the Message object only */
    public ?string $description { set; get; }

    /** @var array<MessageEntityInterface>|null $descriptionEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description */
    public ?array $descriptionEntities { set; get; }
}
