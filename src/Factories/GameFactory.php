<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AnimationFactory as Animation;
use Phenogram\Bindings\Factories\PhotoSizeFactory as PhotoSize;
use Phenogram\Bindings\Types\Game;
use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\GameInterface;

class GameFactory extends AbstractFactory
{
    /**
     * Creates a new Game instance with default fake data.
     *
     * @param string|null             $title        Optional. Title of the game
     * @param string|null             $description  Optional. Description of the game
     * @param array|null              $photo        Optional. Photo that will be displayed in the game message in chats.
     * @param string|null             $text         Optional. Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     * @param array|null              $textEntities Optional. Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     * @param AnimationInterface|null $animation    Optional. Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    public static function make(
        ?string $title = null,
        ?string $description = null,
        ?array $photo = null,
        ?string $text = null,
        ?array $textEntities = null,
        ?AnimationInterface $animation = null,
    ): GameInterface {
        return self::factory()->makeGame(
            title: $title ?? self::fake()->sentence(3),
            description: $description ?? self::fake()->sentence(),
            photo: $photo ?? array_map(fn () => PhotoSize::make(), range(0, self::fake()->numberBetween(0, 2))),
            text: $text,
            textEntities: $textEntities,
            animation: $animation,
        );
    }
}
