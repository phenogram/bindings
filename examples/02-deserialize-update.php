<?php

declare(strict_types=1);

use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;

require dirname(__DIR__) . '/vendor/autoload.php';

$payload = [
    'update_id' => 1001,
    'message' => [
        'message_id' => 77,
        'date' => 1_710_000_000,
        'chat' => [
            'id' => 42,
            'type' => 'private',
        ],
        'text' => 'Hello, Phenogram.',
    ],
];

$update = (new Serializer())->deserialize(
    data: $payload,
    type: UpdateInterface::class,
);

if (!$update instanceof UpdateInterface || !$update->message instanceof MessageInterface) {
    throw new RuntimeException('The serializer did not create the expected types.');
}

printf(
    "Update %d contains message %d from chat %d.\n",
    $update->updateId,
    $update->message->messageId,
    $update->message->chat->id,
);
