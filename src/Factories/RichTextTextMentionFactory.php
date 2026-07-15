<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\RichTextTextMentionInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\RichTextTextMention;

class RichTextTextMentionFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextTextMention instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “text_mention”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     * @param UserInterface|null                                          $user Optional. The mentioned user
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?UserInterface $user = null,
    ): RichTextTextMentionInterface {
        return self::factory()->makeRichTextTextMention(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            user: $user ?? User::make(),
        );
    }
}
