<?php

declare(strict_types=1);

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;

require dirname(__DIR__) . '/vendor/autoload.php';

$serializer = new Serializer();
$keyboard = new InlineKeyboardMarkup(
    inlineKeyboard: [[
        new InlineKeyboardButton(
            text: 'Open documentation',
            url: 'https://core.telegram.org/bots/api',
        ),
    ]],
);

$payload = $serializer->serialize([
    'chatId' => 42,
    'text' => 'Select an action.',
    'replyMarkup' => $keyboard,
]);

$expected = [
    'chat_id' => 42,
    'text' => 'Select an action.',
    'reply_markup' => [
        'inline_keyboard' => [[
            [
                'text' => 'Open documentation',
                'url' => 'https://core.telegram.org/bots/api',
            ],
        ]],
    ],
];

if ($payload !== $expected) {
    throw new RuntimeException('The serializer returned an unexpected payload.');
}

echo "Serialized inline keyboard:\n";
echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n";
