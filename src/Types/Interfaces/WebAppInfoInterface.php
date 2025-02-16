<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a Web App.
 */
interface WebAppInfoInterface extends TypeInterface
{
    /** @var string $url An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps */
    public string $url { set; }
}
