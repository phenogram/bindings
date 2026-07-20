<?php

declare(strict_types=1);

use Phenogram\Bindings\Factories\ChatFactory;
use Phenogram\Bindings\Factories\MessageFactory;
use Phenogram\Bindings\Factories\UserFactory;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

require dirname(__DIR__) . '/vendor/autoload.php';

$message = MessageFactory::make(
    messageId: 501,
    from: UserFactory::make(
        id: 7,
        isBot: true,
        firstName: 'Fixture Bot',
    ),
    date: 1_710_000_000,
    chat: ChatFactory::make(
        id: 42,
        type: 'private',
    ),
    text: 'Fixture ready.',
);

if (!$message instanceof MessageInterface || 'Fixture ready.' !== $message->text) {
    throw new RuntimeException('The test factory did not create the expected message.');
}

printf(
    "Fixture message %d has sender %s and chat %d.\n",
    $message->messageId,
    $message->from?->firstName,
    $message->chat->id,
);
