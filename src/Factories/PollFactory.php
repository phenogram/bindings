<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\PollOptionFactory as PollOption;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Poll;

class PollFactory extends AbstractFactory
{
    /**
     * Creates a new Poll instance with default fake data.
     *
     * @param string|null $id                    Optional. Unique poll identifier
     * @param string|null $question              Optional. Poll question, 1-300 characters
     * @param array|null  $questionEntities      Optional. Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
     * @param array|null  $options               Optional. List of poll options
     * @param int|null    $totalVoterCount       Optional. Total number of users that voted in the poll
     * @param bool|null   $isClosed              Optional. True, if the poll is closed
     * @param bool|null   $isAnonymous           Optional. True, if the poll is anonymous
     * @param string|null $type                  Optional. Poll type, currently can be “regular” or “quiz”
     * @param bool|null   $allowsMultipleAnswers Optional. True, if the poll allows multiple answers
     * @param bool|null   $allowsRevoting        Optional. True, if the poll allows to change the chosen answer options
     * @param array|null  $correctOptionIds      Optional. Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
     * @param string|null $explanation           Optional. Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     * @param array|null  $explanationEntities   Optional. Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @param int|null    $openPeriod            Optional. Optional. Amount of time in seconds the poll will be active after creation
     * @param int|null    $closeDate             Optional. Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     * @param string|null $description           Optional. Optional. Description of the poll; for polls inside the Message object only
     * @param array|null  $descriptionEntities   Optional. Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
     */
    public static function make(
        ?string $id = null,
        ?string $question = null,
        ?array $questionEntities = null,
        ?array $options = null,
        ?int $totalVoterCount = null,
        ?bool $isClosed = null,
        ?bool $isAnonymous = null,
        ?string $type = null,
        ?bool $allowsMultipleAnswers = null,
        ?bool $allowsRevoting = null,
        ?array $correctOptionIds = null,
        ?string $explanation = null,
        ?array $explanationEntities = null,
        ?int $openPeriod = null,
        ?int $closeDate = null,
        ?string $description = null,
        ?array $descriptionEntities = null,
    ): PollInterface {
        return self::factory()->makePoll(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            question: $question ?? self::fake()->text(50),
            questionEntities: $questionEntities,
            options: $options ?? array_map(fn () => PollOption::make(), range(0, self::fake()->numberBetween(0, 2))),
            totalVoterCount: $totalVoterCount ?? self::fake()->randomNumber(),
            isClosed: $isClosed ?? self::fake()->boolean(),
            isAnonymous: $isAnonymous ?? self::fake()->boolean(),
            type: $type ?? self::fake()->word(),
            allowsMultipleAnswers: $allowsMultipleAnswers ?? self::fake()->boolean(),
            allowsRevoting: $allowsRevoting ?? self::fake()->boolean(),
            correctOptionIds: $correctOptionIds,
            explanation: $explanation,
            explanationEntities: $explanationEntities,
            openPeriod: $openPeriod,
            closeDate: $closeDate,
            description: $description,
            descriptionEntities: $descriptionEntities,
        );
    }
}
