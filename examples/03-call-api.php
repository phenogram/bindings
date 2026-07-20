<?php

declare(strict_types=1);

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Examples\Support\RecordingClient;
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;

require dirname(__DIR__) . '/vendor/autoload.php';
require __DIR__ . '/Support/RecordingClient.php';

$client = new RecordingClient([
    [
        'ok' => true,
        'result' => [
            'message_id' => 9001,
            'date' => 1_710_000_000,
            'chat' => [
                'id' => 42,
                'type' => 'private',
            ],
            'text' => 'Hello from Phenogram.',
        ],
    ],
]);

$api = new Api(
    client: $client,
    serializer: new Serializer(),
);

$message = $api->sendMessage(
    chatId: 42,
    text: 'Hello from Phenogram.',
);

$request = $client->requests[0] ?? null;

if (!$message instanceof MessageInterface || $request === null) {
    throw new RuntimeException('The API call did not return the expected result.');
}

if ('sendMessage' !== $request['method'] || 42 !== $request['data']['chat_id']) {
    throw new RuntimeException('The API call did not create the expected request.');
}

printf("sendMessage returned message %d.\n", $message->messageId);
printf("Recorded method: %s.\n", $request['method']);
printf("Recorded chat_id: %d.\n", $request['data']['chat_id']);
