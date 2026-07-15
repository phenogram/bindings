<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;

/**
 * Rich formatted message.
 */
class RichMessage implements Interfaces\RichMessageInterface
{
    /**
     * @param array<RichBlockInterface> $blocks Content of the message
     * @param bool|null                 $isRtl  Optional. True, if the rich message must be shown right-to-left
     */
    public function __construct(
        public array $blocks,
        public ?bool $isRtl = null,
    ) {
    }
}
