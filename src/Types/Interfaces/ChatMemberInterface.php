<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @see ChatMemberOwnerInterface
 * @see ChatMemberAdministratorInterface
 * @see ChatMemberMemberInterface
 * @see ChatMemberRestrictedInterface
 * @see ChatMemberLeftInterface
 * @see ChatMemberBannedInterface
 */
interface ChatMemberInterface extends TypeInterface
{
}
