<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Feature;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\InputFile;

class ReadmeClientTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->token = $_ENV['TELEGRAM_BOT_TOKEN'];
        $this->testChatId = $_ENV['TEST_CHAT_ID'];
    }

    public function testGetMe(): void
    {
        if ($this->token === null) {
            $this->markTestSkipped('TELEGRAM_BOT_TOKEN not set');
        }

        if ($this->testChatId === null) {
            $this->markTestSkipped('TEST_CHAT_ID not set');
        }

        $api = new Api(
            client: new ReadmeClient(
                token: $this->token
            )
        );

        $user = $api->getMe();

        self::assertTrue($user->isBot);

        $path = realpath(__DIR__ . '/../../README.md');

        $message = $api->sendDocument(
            chatId: $this->testChatId,
            document: new InputFile($path),
        );

        self::assertNotNull($message->document);
    }
}
