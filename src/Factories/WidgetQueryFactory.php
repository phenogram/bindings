<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryInterface;
use Phenogram\Bindings\Types\WidgetQuery;

class WidgetQueryFactory extends AbstractFactory
{
    /**
     * Creates a new WidgetQuery instance with default fake data.
     *
     * @param string|null                                                        $id              Optional. Unique identifier for this query
     * @param UserInterface|null                                                 $from            Optional. Sender
     * @param ChatInterface|null                                                 $chat            Optional. Optional. Chat with the message containing the widget; omitted if the widget is in an inline message
     * @param int|null                                                           $messageId       Optional. Optional. Identifier of the message containing the widget; omitted if the widget is in an inline message
     * @param string|null                                                        $inlineMessageId Optional. Optional. Identifier of the inline message containing the widget
     * @param string|null                                                        $chatInstance    Optional. Global identifier, uniquely corresponding to the chat to which the message with the widget was sent
     * @param string|null                                                        $chatType        Optional. Optional. For widgets in inline messages, type of the chat to which the message was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”.
     * @param \Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface|null $type            Optional. Type of the query
     * @param string|null                                                        $data            Optional. Data of the query, 1-64 bytes
     * @param string|null                                                        $widgetId        Optional. Optional. Unique identifier of the shared widget, which sent the query; omitted if the widget isn't shared
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $chatInstance = null,
        ?string $chatType = null,
        ?\Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface $type = null,
        ?string $data = null,
        ?string $widgetId = null,
    ): WidgetQueryInterface {
        return self::factory()->makeWidgetQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            chat: $chat,
            messageId: $messageId,
            inlineMessageId: $inlineMessageId,
            chatInstance: $chatInstance ?? self::fake()->text(50),
            chatType: $chatType,
            type: $type ?? WidgetQueryTypeDataFactory::make(),
            data: $data ?? self::fake()->text(50),
            widgetId: $widgetId,
        );
    }
}
