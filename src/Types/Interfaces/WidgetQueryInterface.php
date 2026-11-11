<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an incoming query from a widget in a message sent by the bot or via the bot. Use answerWidgetQuery to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 */
interface WidgetQueryInterface extends TypeInterface
{
    /** @var string $id Unique identifier for this query */
    public string $id { set; get; }

    /** @var UserInterface $from Sender */
    public UserInterface $from { set; get; }

    /** @var ChatInterface|null $chat Optional. Chat with the message containing the widget; omitted if the widget is in an inline message */
    public ?ChatInterface $chat { set; get; }

    /** @var int|null $messageId Optional. Identifier of the message containing the widget; omitted if the widget is in an inline message */
    public ?int $messageId { set; get; }

    /** @var string|null $inlineMessageId Optional. Identifier of the inline message containing the widget */
    public ?string $inlineMessageId { set; get; }

    /** @var string $chatInstance Global identifier, uniquely corresponding to the chat to which the message with the widget was sent */
    public string $chatInstance { set; get; }

    /** @var string|null $chatType Optional. For widgets in inline messages, type of the chat to which the message was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. */
    public ?string $chatType { set; get; }

    /** @var WidgetQueryTypeInterface $type Type of the query */
    public WidgetQueryTypeInterface $type { set; get; }

    /** @var string $data Data of the query, 1-64 bytes */
    public string $data { set; get; }

    /** @var string|null $widgetId Optional. Unique identifier of the shared widget, which sent the query; omitted if the widget isn't shared */
    public ?string $widgetId { set; get; }
}
