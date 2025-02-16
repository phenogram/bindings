<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The reaction is paid.
 */
interface ReactionTypePaidInterface extends TypeInterface
{
    /** @var string $type Type of the reaction, always “paid” */
    public string $type { set; }
}
