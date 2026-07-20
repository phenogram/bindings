<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Examples\Support;

use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types\Interfaces\ResponseInterface;
use Phenogram\Bindings\Types\Response;

/**
 * Records API calls and returns prepared Telegram response envelopes.
 *
 * Use this client in examples and unit tests. Do not use it as an HTTP client.
 */
final class RecordingClient implements ClientInterface
{
    /**
     * @var list<array{
     *     ok: bool,
     *     result?: mixed,
     *     error_code?: int,
     *     description?: string
     * }>
     */
    private array $responses;

    /**
     * @var list<array{method: string, data: array<mixed>}>
     */
    public array $requests = [];

    /**
     * @param list<array{
     *     ok: bool,
     *     result?: mixed,
     *     error_code?: int,
     *     description?: string
     * }> $responses
     */
    public function __construct(array $responses)
    {
        $this->responses = array_values($responses);
    }

    public function sendRequest(string $method, array $data): ResponseInterface
    {
        $this->requests[] = [
            'method' => $method,
            'data' => $data,
        ];

        $response = array_shift($this->responses);

        if ($response === null) {
            throw new \RuntimeException('The recording client has no prepared response.');
        }

        return new Response(
            ok: $response['ok'],
            result: $response['result'] ?? null,
            errorCode: $response['error_code'] ?? null,
            description: $response['description'] ?? null,
        );
    }
}
