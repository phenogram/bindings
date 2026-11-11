<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents the content of a message with a shared widget to be sent as the result of an inline query. Currently, widgets can't be sent in response to inline queries in the production environment.
 */
class InputSharedWidgetMessageContent extends InputMessageContent implements Interfaces\InputSharedWidgetMessageContentInterface
{
    /**
     * @param string                             $widgetId              Unique identifier of the shared widget created by the bot
     * @param string|null                        $chatData              Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     * @param string|null                        $caption               Optional. Widget caption, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode             Optional. Mode for parsing entities in the widget caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities       Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                          $showCaptionAboveMedia Optional. Pass True if the caption must be shown above the widget
     */
    public function __construct(
        public string $widgetId,
        public ?string $chatData = null,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
    ) {
    }
}
