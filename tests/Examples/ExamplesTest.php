<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Examples;

use Phenogram\Bindings\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class ExamplesTest extends TestCase
{
    /**
     * @return iterable<string, array{string, string}>
     */
    public static function examples(): iterable
    {
        yield 'serialize keyboard' => [
            '01-serialize-keyboard.php',
            'Serialized inline keyboard:',
        ];
        yield 'deserialize update' => [
            '02-deserialize-update.php',
            'Update 1001 contains message 77 from chat 42.',
        ];
        yield 'call API' => [
            '03-call-api.php',
            'sendMessage returned message 9001.',
        ];
        yield 'custom type' => [
            '04-custom-type.php',
            'Custom address: CHELYABINSK.',
        ];
        yield 'test factories' => [
            '05-test-factories.php',
            'Fixture message 501 has sender Fixture Bot and chat 42.',
        ];
        yield 'handle API error' => [
            '06-handle-api-error.php',
            'Telegram error 401: Unauthorized.',
        ];
    }

    #[DataProvider('examples')]
    public function testExampleRuns(string $filename, string $expectedOutput): void
    {
        $path = dirname(__DIR__, 2) . '/examples/' . $filename;
        $command = sprintf(
            '%s %s 2>&1',
            escapeshellarg(PHP_BINARY),
            escapeshellarg($path),
        );

        exec($command, $output, $exitCode);
        $combinedOutput = implode("\n", $output);

        self::assertSame(0, $exitCode, $combinedOutput);
        self::assertStringContainsString($expectedOutput, $combinedOutput);
    }
}
