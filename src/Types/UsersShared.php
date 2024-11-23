<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\SharedUserInterface;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
class UsersShared implements Interfaces\UsersSharedInterface
{
    /**
     * @param int                        $requestId Identifier of the request
     * @param array<SharedUserInterface> $users     information about users shared with the bot
     */
    public function __construct(
        public int $requestId,
        public array $users,
    ) {
    }
}
