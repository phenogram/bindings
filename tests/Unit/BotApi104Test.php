<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Unit;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\ClientInterface;
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\AreaPosition;
use Phenogram\Bindings\Types\ChatShareThemeEmoji;
use Phenogram\Bindings\Types\ChatShareThemeUniqueGift;
use Phenogram\Bindings\Types\EmojiTypeCustomEmoji;
use Phenogram\Bindings\Types\EmojiTypeEmoji;
use Phenogram\Bindings\Types\EphemeralMessageParameters;
use Phenogram\Bindings\Types\Interfaces\ChatFullInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ChatShareThemeInterface;
use Phenogram\Bindings\Types\Interfaces\ReplyParametersInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\TonWalletCardInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;
use Phenogram\Bindings\Types\Response;
use Phenogram\Bindings\Types\RichTextBold;
use Phenogram\Bindings\Types\RichTextItalic;
use Phenogram\Bindings\Types\SharedWidgetQuery;
use Phenogram\Bindings\Types\UniqueGift;
use Phenogram\Bindings\Types\Widget;
use Phenogram\Bindings\Types\WidgetQuery;
use Phenogram\Bindings\Types\WidgetQueryTypeData;
use Phenogram\Bindings\Types\WidgetQueryTypeSentTransaction;
use Phenogram\Bindings\Types\WidgetQueryTypeSignData;
use PHPUnit\Framework\Attributes\DataProvider;

final class BotApi104Test extends TestCase
{
    public function testEphemeralCallbackReplyDoesNotRequireChatOrReceiver(): void
    {
        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->with('sendMessage', [
                'text' => 'Your private reply.',
                'ephemeral_message_parameters' => [
                    'callback_query_id' => 'callback-104',
                    'replace_callback_query_message' => true,
                ],
            ])
            ->willReturn(new Response(ok: true, result: [
                'message_id' => 104,
                'date' => 1_710_000_000,
                'chat' => ['id' => 42, 'type' => 'private'],
                'ephemeral_message_id' => 105,
            ]));

        $message = (new Api($client))->sendMessage(
            text: 'Your private reply.',
            ephemeralMessageParameters: new EphemeralMessageParameters(
                callbackQueryId: 'callback-104',
                replaceCallbackQueryMessage: true,
            ),
        );

        self::assertSame(105, $message->ephemeralMessageId);
    }

    public static function widgetQueries(): iterable
    {
        $wallet = ['address' => 'fixture-wallet', 'amount' => '1000000000', 'public_key' => 'fixture-public-key'];
        $types = [
            'data' => [
                ['type' => 'data', 'wallet_card' => ['address' => 'fixture-wallet', 'amount' => '1000000000', 'stickers' => []]],
                WidgetQueryTypeData::class,
            ],
            'sign_data' => [
                ['type' => 'sign_data', 'wallet' => $wallet, 'sign_data' => 'fixture-signed-data'],
                WidgetQueryTypeSignData::class,
            ],
            'sent_transaction' => [
                ['type' => 'sent_transaction', 'wallet' => $wallet, 'msg_hash' => 'fixture-message-hash'],
                WidgetQueryTypeSentTransaction::class,
            ],
        ];
        foreach (['widget_query', 'shared_widget_query'] as $field) {
            foreach ($types as $name => [$type, $class]) {
                yield $field . '/' . $name => [$field, $type, $class];
            }
        }
    }

    #[DataProvider('widgetQueries')]
    public function testWidgetUpdatesDecodeEachQueryPayload(string $field, array $type, string $expectedType): void
    {
        $query = [
            'id' => 'query-104',
            'from' => ['id' => 42, 'is_bot' => false, 'first_name' => 'Alice'],
            'type' => $type,
            'data' => 'query-data',
            'widget_id' => 'widget-104',
        ];
        if ('widget_query' === $field) {
            $query['chat_instance'] = 'chat-instance-104';
            $query['chat'] = ['id' => 42, 'type' => 'private'];
            $query['message_id'] = 104;
        }

        $data = ['update_id' => 1004, $field => $query];
        $serializer = new Serializer();
        $update = $serializer->deserialize($data, UpdateInterface::class);
        $decoded = 'widget_query' === $field ? $update->widgetQuery : $update->sharedWidgetQuery;

        self::assertInstanceOf('widget_query' === $field ? WidgetQuery::class : SharedWidgetQuery::class, $decoded);
        self::assertInstanceOf($expectedType, $decoded->type);
        self::assertSame(42, $decoded->from->id);
        self::assertSame('query-data', $decoded->data);
        self::assertEquals($data, $serializer->serialize(['update' => $update])['update']);
    }

    public function testChatShareThemeDecodesBothEmojiVariants(): void
    {
        $data = [
            'id' => 42,
            'type' => 'private',
            'accent_color_id' => 0,
            'max_reaction_count' => 10,
            'accepted_gift_types' => [
                'unlimited_gifts' => true,
                'limited_gifts' => true,
                'unique_gifts' => true,
                'premium_subscription' => true,
                'gifts_from_channels' => false,
            ],
            'share_theme' => [
                'type' => 'emoji',
                'emojis' => [
                    ['type' => 'emoji', 'emoji' => '⭐'],
                    ['type' => 'custom_emoji', 'custom_emoji_id' => 'custom-emoji-104'],
                ],
                'background_backdrop_id' => 7,
            ],
        ];
        $serializer = new Serializer();
        $chat = $serializer->deserialize($data, ChatFullInfoInterface::class);

        self::assertInstanceOf(ChatShareThemeEmoji::class, $chat->shareTheme);
        self::assertInstanceOf(EmojiTypeEmoji::class, $chat->shareTheme->emojis[0]);
        self::assertSame('⭐', $chat->shareTheme->emojis[0]->emoji);
        self::assertInstanceOf(EmojiTypeCustomEmoji::class, $chat->shareTheme->emojis[1]);
        self::assertSame('custom-emoji-104', $chat->shareTheme->emojis[1]->customEmojiId);
        self::assertEquals($data, $serializer->serialize(['chat' => $chat])['chat']);
    }

    public function testUniqueGiftShareThemePreservesTheGift(): void
    {
        $data = ['type' => 'unique_gift', 'gift' => self::uniqueGiftData()];
        $serializer = new Serializer();
        $theme = $serializer->deserialize($data, ChatShareThemeInterface::class);

        self::assertInstanceOf(ChatShareThemeUniqueGift::class, $theme);
        self::assertInstanceOf(UniqueGift::class, $theme->gift);
        self::assertSame('FixtureGift-104', $theme->gift->name);
        self::assertEquals($data, $serializer->serialize(['theme' => $theme])['theme']);
    }

    public function testQuoteRichTextsPreserveStringsEntitiesAndNestedLists(): void
    {
        $richTexts = [
            'Plain quote',
            ['type' => 'bold', 'text' => 'Bold quote'],
            ['Nested ', ['type' => 'italic', 'text' => 'quote']],
        ];
        $serializer = new Serializer();
        $quoteData = ['text' => 'Quote', 'position' => 0, 'rich_texts' => $richTexts];
        $quote = $serializer->deserialize($quoteData, TextQuoteInterface::class);
        $replyData = ['message_id' => 104, 'quote_rich_texts' => $richTexts];
        $reply = $serializer->deserialize($replyData, ReplyParametersInterface::class);

        foreach ([$quote->richTexts, $reply->quoteRichTexts] as $parts) {
            self::assertSame('Plain quote', $parts[0]);
            self::assertInstanceOf(RichTextBold::class, $parts[1]);
            self::assertSame('Nested ', $parts[2][0]);
            self::assertInstanceOf(RichTextItalic::class, $parts[2][1]);
        }

        self::assertEquals($quoteData, $serializer->serialize(['quote' => $quote])['quote']);
        self::assertEquals($replyData, $serializer->serialize(['replyParameters' => $reply])['reply_parameters']);
    }

    public function testWalletCardStickerUsesSharedAreaPosition(): void
    {
        $data = [
            'address' => 'fixture-wallet',
            'amount' => '1000000000',
            'stickers' => [[
                'position' => [
                    'x_percentage' => 50.0,
                    'y_percentage' => 50.0,
                    'width_percentage' => 20.0,
                    'height_percentage' => 20.0,
                    'rotation_angle' => 15.0,
                    'corner_radius_percentage' => 5.0,
                ],
                'nft' => [
                    'address' => 'fixture-nft',
                    'index' => '104',
                    'name' => 'Fixture NFT',
                    'description' => 'A fixture for the wallet card.',
                ],
            ]],
        ];
        $serializer = new Serializer();
        $card = $serializer->deserialize($data, TonWalletCardInterface::class);

        self::assertInstanceOf(AreaPosition::class, $card->stickers[0]->position);
        self::assertSame(15.0, $card->stickers[0]->position->rotationAngle);
        self::assertSame(5.0, $card->stickers[0]->position->cornerRadiusPercentage);
        self::assertEquals($data, $serializer->serialize(['card' => $card])['card']);
    }

    public function testSendWidgetSerializesOptionsAndDecodesTheReturnedWidget(): void
    {
        $html = '<button>Open</button>';
        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->with('sendWidget', [
                'chat_id' => 42,
                'html' => $html,
                'public_data' => 'widget-data',
                'allow_queries' => true,
                'is_shared' => false,
            ])
            ->willReturn(new Response(ok: true, result: [
                'message_id' => 104,
                'date' => 1_710_000_000,
                'chat' => ['id' => 42, 'type' => 'private'],
                'widget' => ['html' => $html, 'id' => 'widget-104', 'public_data' => 'widget-data'],
            ]));

        $message = (new Api($client))->sendWidget(
            chatId: 42,
            html: $html,
            publicData: 'widget-data',
            allowQueries: true,
            isShared: false,
        );

        self::assertInstanceOf(Widget::class, $message->widget);
        self::assertSame($html, $message->widget->html);
        self::assertSame('widget-104', $message->widget->id);
    }

    public function testGetUniqueGiftReturnsTheRequestedGift(): void
    {
        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->with('getUniqueGift', ['name' => 'FixtureGift-104'])
            ->willReturn(new Response(ok: true, result: self::uniqueGiftData()));

        $gift = (new Api($client))->getUniqueGift(name: 'FixtureGift-104');

        self::assertInstanceOf(UniqueGift::class, $gift);
        self::assertSame('FixtureGift-104', $gift->name);
        self::assertSame('rare', $gift->model->rarity);
    }

    private static function uniqueGiftData(): array
    {
        $sticker = [
            'file_id' => 'sticker-file',
            'file_unique_id' => 'sticker-unique',
            'type' => 'regular',
            'width' => 512,
            'height' => 512,
            'is_animated' => false,
            'is_video' => false,
        ];

        return [
            'gift_id' => 'gift-104',
            'base_name' => 'Fixture Gift',
            'name' => 'FixtureGift-104',
            'number' => 104,
            'model' => ['name' => 'Model', 'sticker' => $sticker, 'rarity_per_mille' => 20, 'rarity' => 'rare'],
            'symbol' => ['name' => 'Symbol', 'sticker' => $sticker, 'rarity_per_mille' => 30],
            'backdrop' => [
                'name' => 'Backdrop',
                'colors' => ['center_color' => 1, 'edge_color' => 2, 'symbol_color' => 3, 'text_color' => 4],
                'rarity_per_mille' => 40,
            ],
        ];
    }
}
