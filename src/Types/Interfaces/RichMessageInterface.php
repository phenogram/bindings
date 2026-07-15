<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Rich formatted message.
 */
interface RichMessageInterface extends TypeInterface
{
    /** @var array<RichBlockInterface> $blocks Content of the message */
    public array $blocks { set; get; }

    /** @var bool|null $isRtl Optional. True, if the rich message must be shown right-to-left */
    public ?bool $isRtl { set; get; }
}
