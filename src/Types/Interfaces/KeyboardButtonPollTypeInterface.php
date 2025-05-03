<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
interface KeyboardButtonPollTypeInterface extends TypeInterface
{
    /** @var string|null $type Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type. */
    public ?string $type { set; get; }
}
