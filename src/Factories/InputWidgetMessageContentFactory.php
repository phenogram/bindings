<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputWidgetMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputWidgetMessageContentInterface;

class InputWidgetMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputWidgetMessageContent instance with default fake data.
     *
     * @param string|null $html                  Optional. HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
     * @param int|null    $width                 Optional. Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
     * @param int|null    $height                Optional. Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
     * @param string|null $publicData            Optional. Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
     * @param string|null $chatData              Optional. Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     * @param string|null $caption               Optional. Optional. Widget caption, 0-1024 characters after entities parsing
     * @param string|null $parseMode             Optional. Optional. Mode for parsing entities in the widget caption. See formatting options for more details.
     * @param array|null  $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null   $showCaptionAboveMedia Optional. Optional. Pass True if the caption must be shown above the widget
     * @param bool|null   $allowQueries          Optional. Optional. Pass True to allow the widget to send queries to the bot
     * @param bool|null   $isShared              Optional. Optional. Pass True to create a shared widget. Each message sent from the result creates a separate shared widget, whose identifier is received by the bot only in the field widget_id of queries from the widget. To send an existing shared widget in response to an inline query, use InputSharedWidgetMessageContent instead.
     */
    public static function make(
        ?string $html = null,
        ?int $width = null,
        ?int $height = null,
        ?string $publicData = null,
        ?string $chatData = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $allowQueries = null,
        ?bool $isShared = null,
    ): InputWidgetMessageContentInterface {
        return self::factory()->makeInputWidgetMessageContent(
            html: $html ?? self::fake()->text(50),
            width: $width,
            height: $height,
            publicData: $publicData,
            chatData: $chatData,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            allowQueries: $allowQueries,
            isShared: $isShared,
        );
    }
}
