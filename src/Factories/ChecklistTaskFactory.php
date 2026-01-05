<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChecklistTask;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChecklistTaskFactory extends AbstractFactory
{
    /**
     * Creates a new ChecklistTask instance with default fake data.
     *
     * @param int|null           $id              Optional. Unique identifier of the task
     * @param string|null        $text            Optional. Text of the task
     * @param array|null         $textEntities    Optional. Optional. Special entities that appear in the task text
     * @param UserInterface|null $completedByUser Optional. Optional. User that completed the task; omitted if the task wasn't completed by a user
     * @param ChatInterface|null $completedByChat Optional. Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
     * @param int|null           $completionDate  Optional. Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
     */
    public static function make(
        ?int $id = null,
        ?string $text = null,
        ?array $textEntities = null,
        ?UserInterface $completedByUser = null,
        ?ChatInterface $completedByChat = null,
        ?int $completionDate = null,
    ): ChecklistTaskInterface {
        return self::factory()->makeChecklistTask(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            text: $text ?? self::fake()->sentence(),
            textEntities: $textEntities,
            completedByUser: $completedByUser,
            completedByChat: $completedByChat,
            completionDate: $completionDate,
        );
    }
}
