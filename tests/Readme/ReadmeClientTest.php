<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Tests\Support\Environment;
use Phenogram\Bindings\Tests\TestCase;

class ReadmeClientTest extends TestCase
{
    private Api $api;
    private string $testChatId;
    private string $token;

    protected function setUp(): void
    {
        parent::setUp();

        if ('1' !== Environment::get('RUN_TELEGRAM_INTEGRATION')) {
            $this->markTestSkipped('Set RUN_TELEGRAM_INTEGRATION=1 to run live Telegram tests.');
        }

        $token = Environment::get('TELEGRAM_BOT_TOKEN');
        $testChatId = Environment::get('TEST_CHAT_ID');

        if ($token === null || '' === $token) {
            $this->markTestSkipped('TELEGRAM_BOT_TOKEN not set');
        }

        if ($testChatId === null || '' === $testChatId) {
            $this->markTestSkipped('TEST_CHAT_ID not set');
        }

        $this->token = $token;
        $this->testChatId = $testChatId;

        $this->api = new Api(
            client: new ReadmeClient(
                token: $this->token
            )
        );
    }

    public function testGetMe(): void
    {
        $user = $this->api->getMe();

        self::assertTrue($user->isBot);
    }

    public function testSendDocument(): void
    {
        $path = realpath(__DIR__ . '/../../README.md');
        self::assertNotFalse($path);

        $message = $this->api->sendDocument(
            chatId: $this->testChatId,
            document: new ReadmeLocalFile($path),
        );

        self::assertNotNull($message->document);
    }
}
