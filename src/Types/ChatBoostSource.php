<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the source of a chat boost. It can be one of.
 *
 * @see ChatBoostSourcePremium
 * @see ChatBoostSourceGiftCode
 * @see ChatBoostSourceGiveaway
 */
abstract class ChatBoostSource implements Interfaces\ChatBoostSourceInterface
{
    public function __construct()
    {
    }
}
