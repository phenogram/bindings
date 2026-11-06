<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Unit;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Factories\RichMessageButtonFactory;
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\EphemeralMessageParameters;
use Phenogram\Bindings\Types\InputMediaDocument;
use Phenogram\Bindings\Types\InputMediaPhoto;
use Phenogram\Bindings\Types\InputMediaVoiceNote;
use Phenogram\Bindings\Types\InputRichBlockButtons;
use Phenogram\Bindings\Types\InputRichBlockDocument;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\RichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;
use Phenogram\Bindings\Types\MessageGenerationStopped;
use Phenogram\Bindings\Types\Response;
use Phenogram\Bindings\Types\RichBlockButtons;
use Phenogram\Bindings\Types\RichBlockDocument;
use Phenogram\Bindings\Types\RichBlockExpandableBlockQuotation;
use Phenogram\Bindings\Types\RichBlockParagraph;
use Phenogram\Bindings\Types\RichMessageButton;
use Phenogram\Bindings\Types\RichTextBold;
use Phenogram\Bindings\Types\RichTextItalic;
use Phenogram\Bindings\Types\Update;
use Phenogram\Bindings\Types\UpdateType;

final class BotApi103Test extends TestCase
{
    public function testSendMessageUsesNestedEphemeralParameters(): void
    {
        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->with('sendMessage', [
                'chat_id' => -100123,
                'text' => 'Only you can see this.',
                'ephemeral_message_parameters' => [
                    'receiver_user_id' => 42,
                    'callback_query_id' => 'callback-123',
                    'replace_callback_query_message' => false,
                ],
            ])
            ->willReturn(new Response(ok: true, result: [
                'message_id' => 123,
                'date' => 1_710_000_000,
                'chat' => ['id' => -100123, 'type' => 'supergroup'],
                'ephemeral_message_id' => 456,
                'receiver_user' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Alice'],
            ]));

        $message = (new Api($client))->sendMessage(
            chatId: -100123,
            text: 'Only you can see this.',
            ephemeralMessageParameters: new EphemeralMessageParameters(
                receiverUserId: 42,
                callbackQueryId: 'callback-123',
                replaceCallbackQueryMessage: false,
            ),
        );

        self::assertSame(456, $message->ephemeralMessageId);
        self::assertSame(42, $message->receiverUser->id);
    }

    public function testStoppedMessageGenerationUpdateIsDeserialized(): void
    {
        $update = (new Serializer())->deserialize(
            data: [
                'update_id' => 1001,
                'stopped_message_generation' => [
                    'chat' => ['id' => -100123, 'type' => 'supergroup'],
                    'draft_id' => 77,
                    'message_thread_id' => 15,
                ],
            ],
            type: UpdateInterface::class,
        );

        self::assertInstanceOf(MessageGenerationStopped::class, $update->stoppedMessageGeneration);
        self::assertSame(-100123, $update->stoppedMessageGeneration->chat->id);
        self::assertSame(77, $update->stoppedMessageGeneration->draftId);
        self::assertSame(15, $update->stoppedMessageGeneration->messageThreadId);
    }

    public function testDocumentRichBlockDeserializesItsFile(): void
    {
        $block = (new Serializer())->deserialize(
            data: [
                'type' => 'document',
                'document' => [
                    'file_id' => 'document-file',
                    'file_unique_id' => 'document-unique',
                    'file_name' => 'report.pdf',
                    'mime_type' => 'application/pdf',
                ],
            ],
            type: RichBlockDocumentInterface::class,
        );

        self::assertInstanceOf(RichBlockDocument::class, $block);
        self::assertSame('document', $block->type);
        self::assertSame('document-file', $block->document->fileId);
        self::assertSame('report.pdf', $block->document->fileName);
        self::assertNull($block->caption);
    }

    public function testIncomingRichMessagePreservesNestedTextAndNewBlocks(): void
    {
        $data = [
            'update_id' => 1002,
            'message' => [
                'message_id' => 124,
                'date' => 1_710_000_000,
                'chat' => ['id' => 42, 'type' => 'private'],
                'rich_message' => [
                    'blocks' => [
                        [
                            'type' => 'paragraph',
                            'text' => [
                                'Hello ',
                                ['type' => 'bold', 'text' => ['world', ['type' => 'italic', 'text' => '!']]],
                            ],
                        ],
                        [
                            'type' => 'buttons',
                            'buttons' => [['text' => 'Open report', 'callback_data' => 'open-report']],
                            'align' => 'center',
                        ],
                        [
                            'type' => 'document',
                            'document' => ['file_id' => 'document-file', 'file_unique_id' => 'document-unique'],
                            'caption' => ['text' => 'Report', 'credit' => ['type' => 'bold', 'text' => 'Alice']],
                        ],
                        ['type' => 'expandable_blockquote', 'text' => 'Details', 'credit' => 'Alice'],
                    ],
                ],
            ],
        ];
        $serializer = new Serializer();
        $update = $serializer->deserialize($data, UpdateInterface::class);
        $blocks = $update->message->richMessage->blocks;

        self::assertInstanceOf(RichBlockParagraph::class, $blocks[0]);
        self::assertSame('Hello ', $blocks[0]->text[0]);
        self::assertInstanceOf(RichTextBold::class, $blocks[0]->text[1]);
        self::assertInstanceOf(RichTextItalic::class, $blocks[0]->text[1]->text[1]);
        self::assertSame('!', $blocks[0]->text[1]->text[1]->text);
        self::assertInstanceOf(RichBlockButtons::class, $blocks[1]);
        self::assertInstanceOf(RichMessageButton::class, $blocks[1]->buttons[0]);
        self::assertSame('Open report', $blocks[1]->buttons[0]->text);
        self::assertInstanceOf(RichBlockDocument::class, $blocks[2]);
        self::assertSame('Report', $blocks[2]->caption->text);
        self::assertInstanceOf(RichBlockExpandableBlockQuotation::class, $blocks[3]);
        self::assertEquals($data, $serializer->serialize(['update' => $update])['update']);
    }

    public function testInputRichMessagePreservesNewInputBlockTypes(): void
    {
        $data = [
            'blocks' => [
                ['type' => 'buttons', 'buttons' => [['text' => 'Open report', 'callback_data' => 'open-report']]],
                [
                    'type' => 'document',
                    'document' => ['type' => 'document', 'media' => 'document-file'],
                    'caption' => ['text' => ['Monthly ', ['type' => 'bold', 'text' => 'report']]],
                ],
            ],
        ];
        $serializer = new Serializer();
        $message = $serializer->deserialize($data, InputRichMessageInterface::class);

        self::assertInstanceOf(InputRichBlockButtons::class, $message->blocks[0]);
        self::assertInstanceOf(InputRichBlockDocument::class, $message->blocks[1]);
        self::assertSame('document-file', $message->blocks[1]->document->media);
        self::assertInstanceOf(RichTextBold::class, $message->blocks[1]->caption->text[1]);
        self::assertEquals($data, $serializer->serialize(['richMessage' => $message])['rich_message']);
    }

    public function testRichMessageButtonFactoryProvidesUsableDefaultText(): void
    {
        $button = RichMessageButtonFactory::make(callbackData: 'fixture-button');

        self::assertInstanceOf(RichMessageButton::class, $button);
        self::assertIsString($button->text);
        self::assertNotSame('', $button->text);
        self::assertSame('fixture-button', $button->callbackData);
        self::assertSame($button->text, (new Serializer())->serialize(['button' => $button])['button']['text']);
    }

    public function testRichMessageMediaPreservesEachEmbeddedMediaType(): void
    {
        $data = [
            'html' => '<tg-document src="tg://document?id=report"></tg-document>',
            'media' => [
                [
                    'id' => 'report',
                    'media' => ['type' => 'document', 'media' => 'document-file', 'disable_content_type_detection' => true],
                ],
                [
                    'id' => 'cover',
                    'media' => ['type' => 'photo', 'media' => 'photo-file', 'has_spoiler' => true],
                ],
                [
                    'id' => 'narration',
                    'media' => ['type' => 'voice_note', 'media' => 'voice-file', 'duration' => 42],
                ],
            ],
        ];
        $serializer = new Serializer();
        $message = $serializer->deserialize($data, InputRichMessageInterface::class);

        self::assertInstanceOf(InputMediaDocument::class, $message->media[0]->media);
        self::assertTrue($message->media[0]->media->disableContentTypeDetection);
        self::assertInstanceOf(InputMediaPhoto::class, $message->media[1]->media);
        self::assertTrue($message->media[1]->media->hasSpoiler);
        self::assertInstanceOf(InputMediaVoiceNote::class, $message->media[2]->media);
        self::assertSame(42, $message->media[2]->media->duration);
        self::assertEquals($data, $serializer->serialize(['richMessage' => $message])['rich_message']);
    }

    public function testRichTextCanBeDecodedAsTextAnEntityOrANestedList(): void
    {
        $serializer = new Serializer();

        self::assertSame('Plain text', $serializer->deserialize('Plain text', RichTextInterface::class));
        $bold = $serializer->deserialize(['type' => 'bold', 'text' => 'Bold text'], RichTextInterface::class);
        self::assertInstanceOf(RichTextBold::class, $bold);
        self::assertSame('Bold text', $bold->text);

        $data = ['Plain text', [['type' => 'bold', 'text' => 'Bold text'], 'More text']];
        $parts = $serializer->deserialize($data, RichTextInterface::class);
        self::assertSame('Plain text', $parts[0]);
        self::assertInstanceOf(RichTextBold::class, $parts[1][0]);
        self::assertEquals($data, $serializer->serialize(['text' => $parts])['text']);
    }

    public function testUnknownRichBlockTypeIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new Serializer())->deserialize(['type' => 'unknown_block'], RichBlockInterface::class);
    }

    public function testEveryUpdateFieldHasAnAllowedUpdateType(): void
    {
        $fields = [];
        foreach ((new \ReflectionClass(Update::class))->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            if ('updateId' !== $property->getName()) {
                $fields[] = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $property->getName()));
            }
        }

        $types = array_map(static fn (UpdateType $type): string => $type->value, UpdateType::cases());
        sort($fields);
        sort($types);

        self::assertSame($fields, $types);
    }
}
