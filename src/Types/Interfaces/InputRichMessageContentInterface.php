<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a rich message to be sent as the result of an inline query.
 */
interface InputRichMessageContentInterface extends TypeInterface
{
    /** @var InputRichMessageInterface $richMessage The message to be sent */
    public InputRichMessageInterface $richMessage { set; get; }
}
