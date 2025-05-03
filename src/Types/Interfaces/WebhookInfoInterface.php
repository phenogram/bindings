<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the current status of a webhook.
 */
interface WebhookInfoInterface extends TypeInterface
{
    /** @var string $url Webhook URL, may be empty if webhook is not set up */
    public string $url { set; get; }

    /** @var bool $hasCustomCertificate True, if a custom certificate was provided for webhook certificate checks */
    public bool $hasCustomCertificate { set; get; }

    /** @var int $pendingUpdateCount Number of updates awaiting delivery */
    public int $pendingUpdateCount { set; get; }

    /** @var string|null $ipAddress Optional. Currently used webhook IP address */
    public ?string $ipAddress { set; get; }

    /** @var int|null $lastErrorDate Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook */
    public ?int $lastErrorDate { set; get; }

    /** @var string|null $lastErrorMessage Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook */
    public ?string $lastErrorMessage { set; get; }

    /** @var int|null $lastSynchronizationErrorDate Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters */
    public ?int $lastSynchronizationErrorDate { set; get; }

    /** @var int|null $maxConnections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery */
    public ?int $maxConnections { set; get; }

    /** @var array<string>|null $allowedUpdates Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member */
    public ?array $allowedUpdates { set; get; }
}
