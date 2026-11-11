<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a message with a shared widget to be sent as the result of an inline query. Currently, widgets can't be sent in response to inline queries in the production environment.
 */
interface InputSharedWidgetMessageContentInterface extends TypeInterface
{
    /** @var string $widgetId Unique identifier of the shared widget created by the bot */
    public string $widgetId { set; get; }

    /** @var string|null $chatData Optional. Data of the widget, which is specific to the message, 0-1024 bytes */
    public ?string $chatData { set; get; }

    /** @var string|null $caption Optional. Widget caption, 0-1024 characters after entities parsing */
    public ?string $caption { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the widget caption. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; get; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True if the caption must be shown above the widget */
    public ?bool $showCaptionAboveMedia { set; get; }
}
