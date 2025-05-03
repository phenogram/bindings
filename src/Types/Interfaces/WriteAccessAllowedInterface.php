<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 */
interface WriteAccessAllowedInterface extends TypeInterface
{
    /** @var bool|null $fromRequest Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess */
    public ?bool $fromRequest { set; get; }

    /** @var string|null $webAppName Optional. Name of the Web App, if the access was granted when the Web App was launched from a link */
    public ?string $webAppName { set; get; }

    /** @var bool|null $fromAttachmentMenu Optional. True, if the access was granted when the bot was added to the attachment or side menu */
    public ?bool $fromAttachmentMenu { set; get; }
}
