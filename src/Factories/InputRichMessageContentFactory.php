<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InputRichMessageFactory as InputRichMessage;
use Phenogram\Bindings\Types\InputRichMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageInterface;

class InputRichMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichMessageContent instance with default fake data.
     *
     * @param InputRichMessageInterface|null $richMessage Optional. The message to be sent
     */
    public static function make(?InputRichMessageInterface $richMessage = null): InputRichMessageContentInterface
    {
        return self::factory()->makeInputRichMessageContent(
            richMessage: $richMessage ?? InputRichMessage::make(),
        );
    }
}
