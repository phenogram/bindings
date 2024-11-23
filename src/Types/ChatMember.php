<?php

namespace Phenogram\Bindings\Types;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @see ChatMemberOwner
 * @see ChatMemberAdministrator
 * @see ChatMemberMember
 * @see ChatMemberRestricted
 * @see ChatMemberLeft
 * @see ChatMemberBanned
 */
abstract class ChatMember implements Interfaces\ChatMemberInterface
{
}
