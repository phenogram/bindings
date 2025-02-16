<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
interface ProximityAlertTriggeredInterface extends TypeInterface
{
    /** @var UserInterface $traveler User that triggered the alert */
    public UserInterface $traveler { set; }

    /** @var UserInterface $watcher User that set the alert */
    public UserInterface $watcher { set; }

    /** @var int $distance The distance between the users */
    public int $distance { set; }
}
