<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a message with an HTML widget to be sent as the result of an inline query. Currently, widgets can't be sent in response to inline queries in the production environment.
 */
interface InputWidgetMessageContentInterface extends TypeInterface
{
    /** @var string $html HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level. */
    public string $html { set; get; }

    /** @var int|null $width Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble. */
    public ?int $width { set; get; }

    /** @var int|null $height Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600. */
    public ?int $height { set; get; }

    /** @var string|null $publicData Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data. */
    public ?string $publicData { set; get; }

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

    /** @var bool|null $allowQueries Optional. Pass True to allow the widget to send queries to the bot */
    public ?bool $allowQueries { set; get; }

    /** @var bool|null $isShared Optional. Pass True to create a shared widget. Each message sent from the result creates a separate shared widget, whose identifier is received by the bot only in the field widget_id of queries from the widget. To send an existing shared widget in response to an inline query, use InputSharedWidgetMessageContent instead. */
    public ?bool $isShared { set; get; }
}
