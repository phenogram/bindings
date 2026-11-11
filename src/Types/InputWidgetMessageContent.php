<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents the content of a message with an HTML widget to be sent as the result of an inline query. Currently, widgets can't be sent in response to inline queries in the production environment.
 */
class InputWidgetMessageContent extends InputMessageContent implements Interfaces\InputWidgetMessageContentInterface
{
    /**
     * @param string                             $html                  HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
     * @param int|null                           $width                 Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
     * @param int|null                           $height                Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
     * @param string|null                        $publicData            Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
     * @param string|null                        $chatData              Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     * @param string|null                        $caption               Optional. Widget caption, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode             Optional. Mode for parsing entities in the widget caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities       Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                          $showCaptionAboveMedia Optional. Pass True if the caption must be shown above the widget
     * @param bool|null                          $allowQueries          Optional. Pass True to allow the widget to send queries to the bot
     * @param bool|null                          $isShared              Optional. Pass True to create a shared widget. Each message sent from the result creates a separate shared widget, whose identifier is received by the bot only in the field widget_id of queries from the widget. To send an existing shared widget in response to an inline query, use InputSharedWidgetMessageContent instead.
     */
    public function __construct(
        public string $html,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $publicData = null,
        public ?string $chatData = null,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?bool $allowQueries = null,
        public ?bool $isShared = null,
    ) {
    }
}
