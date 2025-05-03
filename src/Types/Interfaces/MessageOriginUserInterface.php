<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The message was originally sent by a known user.
 */
interface MessageOriginUserInterface extends TypeInterface
{
    /** @var string $type Type of the message origin, always “user” */
    public string $type { set; get; }

    /** @var int $date Date the message was sent originally in Unix time */
    public int $date { set; get; }

    /** @var UserInterface $senderUser User that sent the message originally */
    public UserInterface $senderUser { set; get; }
}
