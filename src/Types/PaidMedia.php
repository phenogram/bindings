<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes paid media. Currently, it can be one of.
 *
 * @see PaidMediaPreview
 * @see PaidMediaPhoto
 * @see PaidMediaVideo
 */
abstract class PaidMedia implements Interfaces\PaidMediaInterface
{
    public function __construct()
    {
    }
}
