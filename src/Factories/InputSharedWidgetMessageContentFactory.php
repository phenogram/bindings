<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputSharedWidgetMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputSharedWidgetMessageContentInterface;

class InputSharedWidgetMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputSharedWidgetMessageContent instance with default fake data.
     *
     * @param string|null $widgetId              Optional. Unique identifier of the shared widget created by the bot
     * @param string|null $chatData              Optional. Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     * @param string|null $caption               Optional. Optional. Widget caption, 0-1024 characters after entities parsing
     * @param string|null $parseMode             Optional. Optional. Mode for parsing entities in the widget caption. See formatting options for more details.
     * @param array|null  $captionEntities       Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null   $showCaptionAboveMedia Optional. Optional. Pass True if the caption must be shown above the widget
     */
    public static function make(
        ?string $widgetId = null,
        ?string $chatData = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
    ): InputSharedWidgetMessageContentInterface {
        return self::factory()->makeInputSharedWidgetMessageContent(
            widgetId: $widgetId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            chatData: $chatData,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
        );
    }
}
