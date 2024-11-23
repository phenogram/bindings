<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\InputFile;

class ReadmeClientTest extends TestCase
{
    private Api $api;

    protected function setUp(): void
    {
        parent::setUp();

        $this->token = $_ENV['TELEGRAM_BOT_TOKEN'];
        $this->testChatId = $_ENV['TEST_CHAT_ID'];

        if ($this->token === null) {
            $this->markTestSkipped('TELEGRAM_BOT_TOKEN not set');
        }

        if ($this->testChatId === null) {
            $this->markTestSkipped('TEST_CHAT_ID not set');
        }

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

        $message = $this->api->sendDocument(
            chatId: $this->testChatId,
            document: new InputFile($path),
        );

        self::assertNotNull($message->document);
    }
}
