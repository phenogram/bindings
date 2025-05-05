<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WebhookInfoInterface;
use Phenogram\Bindings\Types\WebhookInfo;

class WebhookInfoFactory extends AbstractFactory
{
    /**
     * Creates a new WebhookInfo instance with default fake data.
     *
     * @param string|null $url                          Optional. Webhook URL, may be empty if webhook is not set up
     * @param bool|null   $hasCustomCertificate         Optional. True, if a custom certificate was provided for webhook certificate checks
     * @param int|null    $pendingUpdateCount           Optional. Number of updates awaiting delivery
     * @param string|null $ipAddress                    Optional. Optional. Currently used webhook IP address
     * @param int|null    $lastErrorDate                Optional. Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @param string|null $lastErrorMessage             Optional. Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     * @param int|null    $lastSynchronizationErrorDate Optional. Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     * @param int|null    $maxConnections               Optional. Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @param array|null  $allowedUpdates               Optional. Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
     */
    public static function make(
        ?string $url = null,
        ?bool $hasCustomCertificate = null,
        ?int $pendingUpdateCount = null,
        ?string $ipAddress = null,
        ?int $lastErrorDate = null,
        ?string $lastErrorMessage = null,
        ?int $lastSynchronizationErrorDate = null,
        ?int $maxConnections = null,
        ?array $allowedUpdates = null,
    ): WebhookInfoInterface {
        return self::factory()->makeWebhookInfo(
            url: $url ?? self::fake()->url(),
            hasCustomCertificate: $hasCustomCertificate ?? self::fake()->boolean(),
            pendingUpdateCount: $pendingUpdateCount ?? self::fake()->randomNumber(),
            ipAddress: $ipAddress,
            lastErrorDate: $lastErrorDate,
            lastErrorMessage: $lastErrorMessage,
            lastSynchronizationErrorDate: $lastSynchronizationErrorDate,
            maxConnections: $maxConnections,
            allowedUpdates: $allowedUpdates,
        );
    }
}
