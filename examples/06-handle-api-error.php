<?php

declare(strict_types=1);

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Examples\Support\RecordingClient;
use Phenogram\Bindings\ResponseException;

require dirname(__DIR__) . '/vendor/autoload.php';
require __DIR__ . '/Support/RecordingClient.php';

$api = new Api(
    client: new RecordingClient([
        [
            'ok' => false,
            'error_code' => 401,
            'description' => 'Unauthorized',
        ],
    ]),
);

try {
    $api->getMe();
    throw new RuntimeException('The API did not throw ResponseException.');
} catch (ResponseException $exception) {
    if (401 !== $exception->response->errorCode) {
        throw new RuntimeException('The exception contains an unexpected error code.');
    }

    printf(
        "Telegram error %d: %s.\n",
        $exception->response->errorCode,
        $exception->response->description,
    );
}
