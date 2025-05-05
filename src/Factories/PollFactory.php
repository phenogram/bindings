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
     * @param int|null    $correctOptionId       Optional. Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     * @param string|null $explanation           Optional. Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     * @param array|null  $explanationEntities   Optional. Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @param int|null    $openPeriod            Optional. Optional. Amount of time in seconds the poll will be active after creation
     * @param int|null    $closeDate             Optional. Optional. Point in time (Unix timestamp) when the poll will be automatically closed
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
        ?int $correctOptionId = null,
        ?string $explanation = null,
        ?array $explanationEntities = null,
        ?int $openPeriod = null,
        ?int $closeDate = null,
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
            correctOptionId: $correctOptionId,
            explanation: $explanation,
            explanationEntities: $explanationEntities,
            openPeriod: $openPeriod,
            closeDate: $closeDate,
        );
    }
}
