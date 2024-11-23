<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;

class ReadmeSerializerTest extends TestCase
{
    public function testExample1()
    {
        $serializer = new Serializer();
        $inlineKeyboardMarkup = new InlineKeyboardMarkup(
            inlineKeyboard: [[
                new InlineKeyboardButton(text: 'Кнопка 1', callbackData: 'data1'),
            ]],
        );

        $data = $serializer->serialize([
            'reply_markup' => $inlineKeyboardMarkup,
        ]);

        $arrayKeyboard = [
            'reply_markup' => [
                'inline_keyboard' => [[
                    ['text' => 'Кнопка 1', 'callback_data' => 'data1'],
                ]],
            ],
        ];

        self::assertTrue($arrayKeyboard === $data);
    }

    public function testExample2()
    {
        $updatesData = [[
            'update_id' => 1,
            'message' => [
                'message_id' => 2,
                'chat' => [
                    'id' => 3,
                    'type' => 'private',
                ],
                'date' => 1600000000,
            ],
        ]];

        $serializer = new Serializer();
        $updates = $serializer->deserialize(
            data: $updatesData,
            type: UpdateInterface::class,
            isArray: true,
        );

        self::assertTrue($updates[0] instanceof UpdateInterface);
        self::assertTrue($updates[0]->message instanceof MessageInterface);
        self::assertTrue($updates[0]->message->chat instanceof ChatInterface);
    }
}
