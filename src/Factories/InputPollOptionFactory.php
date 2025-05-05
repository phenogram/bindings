<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputPollOption;
use Phenogram\Bindings\Types\Interfaces\InputPollOptionInterface;

class InputPollOptionFactory extends AbstractFactory
{
    /**
     * Creates a new InputPollOption instance with default fake data.
     *
     * @param string|null $text          Optional. Option text, 1-100 characters
     * @param string|null $textParseMode Optional. Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
     * @param array|null  $textEntities  Optional. Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
     */
    public static function make(
        ?string $text = null,
        ?string $textParseMode = null,
        ?array $textEntities = null,
    ): InputPollOptionInterface {
        return self::factory()->makeInputPollOption(
            text: $text ?? self::fake()->sentence(),
            textParseMode: $textParseMode,
            textEntities: $textEntities,
        );
    }
}
