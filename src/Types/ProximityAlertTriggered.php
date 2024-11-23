<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered implements Interfaces\ProximityAlertTriggeredInterface
{
    /**
     * @param UserInterface $traveler User that triggered the alert
     * @param UserInterface $watcher  User that set the alert
     * @param int           $distance The distance between the users
     */
    public function __construct(
        public UserInterface $traveler,
        public UserInterface $watcher,
        public int $distance,
    ) {
    }
}
