<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Feature;

use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Types;

final readonly class ReadmeClient implements ClientInterface
{
    public function __construct(
        private string $token,
        private string $apiUrl = 'https://api.telegram.org',
    ) {
    }

    public function sendRequest(string $method, array $data): Types\Response
    {
        $ch = curl_init("{$this->apiUrl}/bot{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        foreach ($data as $key => $value) {
            if ($value instanceof Types\InputFile) {
                if (file_exists($value->filePath)) {
                    $data[$key] = new \CURLFile($value->filePath);
                } else {
                    throw new \RuntimeException("File not found: {$value->filePath}");
                }
            }
        }

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \RuntimeException('Request Error: ' . curl_error($ch));
        }

        curl_close($ch);

        $responseData = json_decode($response, true);

        if (!isset($responseData['ok']) || !isset($responseData['result'])) {
            return new Types\Response(
                ok: false,
                result: null,
                errorCode: $responseData['error_code'] ?? null,
                description: $responseData['description'] ?? null,
                parameters: isset($responseData['parameters']) ? new Types\ResponseParameters(
                    migrateToChatId: $responseData['parameters']['migrate_to_chat_id'] ?? null,
                    retryAfter: $responseData['parameters']['retry_after'] ?? null,
                ) : null,
            );
        }

        return new Types\Response(
            ok: $responseData['ok'],
            result: $responseData['result'],
            errorCode: $responseData['error_code'] ?? null,
            description: $responseData['description'] ?? null,
            parameters: isset($responseData['parameters']) ? new Types\ResponseParameters(
                migrateToChatId: $responseData['parameters']['migrate_to_chat_id'] ?? null,
                retryAfter: $responseData['parameters']['retry_after'] ?? null,
            ) : null,
        );
    }
}