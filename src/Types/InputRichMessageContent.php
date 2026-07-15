<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichMessageInterface;

/**
 * Represents the content of a rich message to be sent as the result of an inline query.
 */
class InputRichMessageContent extends InputMessageContent implements Interfaces\InputRichMessageContentInterface
{
    /**
     * @param InputRichMessageInterface $richMessage The message to be sent
     */
    public function __construct(
        public InputRichMessageInterface $richMessage,
    ) {
    }
}
