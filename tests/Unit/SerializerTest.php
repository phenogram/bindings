<?php

namespace Phenogram\Bindings\Tests\Unit;

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\Chat;
use Phenogram\Bindings\Types\ChatMemberMember;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;
use Phenogram\Bindings\Types\Message;
use Phenogram\Bindings\Types\MessageOriginUser;
use Phenogram\Bindings\Types\Update;

class SerializerTest extends TestCase
{
    public function testInlineKeyboardMarkupIsAValidJson()
    {
        $serializer = new Serializer();
        $inlineKeyboardMarkup = new InlineKeyboardMarkup(
            inlineKeyboard: [
                [
                    new InlineKeyboardButton(
                        text: 'Button 1',
                        callbackData: 'data1'
                    ),
                    new InlineKeyboardButton(
                        text: 'Button 2',
                        callbackData: 'data2'
                    ),
                ],
                [
                    new InlineKeyboardButton(
                        text: 'Button 3',
                        callbackData: 'data3'
                    ),
                ],
            ],
        );

        $arrayKeyboard = [
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => 'Button 1', 'callback_data' => 'data1'],
                        ['text' => 'Button 2', 'callback_data' => 'data2'],
                    ],
                    [
                        ['text' => 'Button 3', 'callback_data' => 'data3'],
                    ],
                ],
            ],
        ];

        $data = $serializer->serialize([
            'reply_markup' => $inlineKeyboardMarkup,
        ]);

        self::assertEquals($arrayKeyboard, $data);
    }

    public function testAbstractChatMemberDeserializeIntoConcreteClass()
    {
        $updatesData = [
            [
                'update_id' => 1,
                'my_chat_member' => [
                    'chat' => [
                        'id' => -1234567890,
                        'title' => 'FakeChatTitle',
                        'type' => 'group',
                    ],
                    'date' => 1600000000,
                    'from' => [
                        'first_name' => 'John',
                        'id' => 99999999,
                        'is_bot' => false,
                        'is_premium' => false,
                        'language_code' => 'en',
                        'username' => 'fakeuser',
                    ],
                    'new_chat_member' => [
                        'status' => 'member',
                        'user' => [
                            'first_name' => 'Alice',
                            'id' => 88888888,
                            'is_bot' => true,
                            'username' => 'fakebot',
                        ],
                    ],
                    'old_chat_member' => [
                        'status' => 'left',
                        'user' => [
                            'first_name' => 'Alice',
                            'id' => 88888888,
                            'is_bot' => true,
                            'username' => 'fakebot',
                        ],
                    ],
                ],
            ],
        ];

        $serializer = new Serializer();
        $updates = $serializer->deserialize(
            data: $updatesData,
            type: Update::class,
            isArray: true,
        );

        self::assertInstanceOf(ChatMemberMember::class, $updates[0]->myChatMember->newChatMember);
    }

    public function testDeserializeExampleFromReadme()
    {
        $updatesData = [[
            'update_id' => 1,
            'message' => [
                'message_id' => 54321,
                'chat' => [
                    'id' => 11223344,
                    'type' => 'private',
                ],
                'date' => 1600000000,
            ],
        ]];

        $serializer = new Serializer();
        $updates = $serializer->deserialize(
            data: $updatesData,
            type: Update::class,
            isArray: true,
        );

        self::assertInstanceOf(Update::class, $updates[0]);
        self::assertInstanceOf(Message::class, $updates[0]->message);
        self::assertInstanceOf(Chat::class, $updates[0]->message->chat);
    }

    public function testAbstractMaybeInaccessibleMessageDeserializeIntoConcreteClass()
    {
        $updatesData = [
            [
                'update_id' => 1,
                'callback_query' => [
                    'id' => '123456789012345678',
                    'from' => [
                        'id' => 12345678,
                        'is_bot' => false,
                        'first_name' => 'John',
                        'username' => 'john_doe',
                        'language_code' => 'en',
                        'is_premium' => false,
                    ],
                    'message' => [
                        'message_id' => 12345,
                        'from' => [
                            'id' => 9876543210,
                            'is_bot' => true,
                            'first_name' => 'Test Bot',
                            'username' => 'test_bot',
                        ],
                        'chat' => [
                            'id' => 12345678,
                            'first_name' => 'John',
                            'username' => 'john_doe',
                            'type' => 'private',
                        ],
                        'date' => 1234567890,
                        'text' => 'This is a test message',
                        'reply_markup' => [
                            'inline_keyboard' => [
                                [
                                    ['text' => 'Option 1', 'callback_data' => 'option1'],
                                ],
                            ],
                        ],
                    ],
                    'chat_instance' => '-123456789012345678',
                    'data' => 'download:file123',
                ],
            ],
        ];

        $serializer = new Serializer();
        $updates = $serializer->deserialize(
            data: $updatesData,
            type: Update::class,
            isArray: true,
        );

        self::assertInstanceOf(Message::class, $updates[0]->callbackQuery->message);
    }

    public function testAbstractMessageOriginIntoConcreteClass()
    {
        $updatesData = [
            [
                'update_id' => 1,
                'message' => [
                    'message_id' => 54321,
                    'from' => [
                        'id' => 11223344,
                        'is_bot' => false,
                        'first_name' => 'John',
                        'username' => 'johndoe',
                        'language_code' => 'ru',
                        'is_premium' => true,
                    ],
                    'chat' => [
                        'id' => 11223344,
                        'first_name' => 'John',
                        'username' => 'johndoe',
                        'type' => 'private',
                    ],
                    'date' => 1600000000,
                    'forward_origin' => [
                        'type' => 'user',
                        'sender_user' => [
                            'id' => 11223344,
                            'is_bot' => false,
                            'first_name' => 'John',
                            'username' => 'johndoe',
                            'language_code' => 'ru',
                            'is_premium' => true,
                        ],
                        'date' => 1600000500,
                    ],
                    'forward_from' => [
                        'id' => 11223344,
                        'is_bot' => false,
                        'first_name' => 'John',
                        'username' => 'johndoe',
                        'language_code' => 'ru',
                        'is_premium' => true,
                    ],
                    'forward_date' => 1600000500,
                ],
            ],
        ];

        $serializer = new Serializer();
        $updates = $serializer->deserialize(
            data: $updatesData,
            type: Update::class,
            isArray: true,
        );

        self::assertInstanceOf(MessageOriginUser::class, $updates[0]->message->forwardOrigin);
    }

    public function testDeserializeBoolean(): void
    {
        $serializer = new Serializer();
        $data = $serializer->deserialize(
            data: true,
            type: 'bool',
        );

        self::assertTrue($data);
    }
}
