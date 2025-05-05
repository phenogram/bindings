<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WriteAccessAllowedInterface;
use Phenogram\Bindings\Types\WriteAccessAllowed;

class WriteAccessAllowedFactory extends AbstractFactory
{
    /**
     * Creates a new WriteAccessAllowed instance with default fake data.
     *
     * @param bool|null   $fromRequest        Optional. Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
     * @param string|null $webAppName         Optional. Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
     * @param bool|null   $fromAttachmentMenu Optional. Optional. True, if the access was granted when the bot was added to the attachment or side menu
     */
    public static function make(
        ?bool $fromRequest = null,
        ?string $webAppName = null,
        ?bool $fromAttachmentMenu = null,
    ): WriteAccessAllowedInterface {
        return self::factory()->makeWriteAccessAllowed(
            fromRequest: $fromRequest,
            webAppName: $webAppName,
            fromAttachmentMenu: $fromAttachmentMenu,
        );
    }
}
