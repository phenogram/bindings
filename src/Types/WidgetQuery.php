<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface;

/**
 * This object represents an incoming query from a widget in a message sent by the bot or via the bot. Use answerWidgetQuery to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 */
class WidgetQuery implements Interfaces\WidgetQueryInterface
{
    /**
     * @param string                   $id              Unique identifier for this query
     * @param UserInterface            $from            Sender
     * @param string                   $chatInstance    Global identifier, uniquely corresponding to the chat to which the message with the widget was sent
     * @param WidgetQueryTypeInterface $type            Type of the query
     * @param string                   $data            Data of the query, 1-64 bytes
     * @param ChatInterface|null       $chat            Optional. Chat with the message containing the widget; omitted if the widget is in an inline message
     * @param int|null                 $messageId       Optional. Identifier of the message containing the widget; omitted if the widget is in an inline message
     * @param string|null              $inlineMessageId Optional. Identifier of the inline message containing the widget
     * @param string|null              $chatType        Optional. For widgets in inline messages, type of the chat to which the message was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”.
     * @param string|null              $widgetId        Optional. Unique identifier of the shared widget, which sent the query; omitted if the widget isn't shared
     */
    public function __construct(
        public string $id,
        public UserInterface $from,
        public string $chatInstance,
        public WidgetQueryTypeInterface $type,
        public string $data,
        public ?ChatInterface $chat = null,
        public ?int $messageId = null,
        public ?string $inlineMessageId = null,
        public ?string $chatType = null,
        public ?string $widgetId = null,
    ) {
    }
}
