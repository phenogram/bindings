<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AnimationFactory as Animation;
use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\ContactFactory as Contact;
use Phenogram\Bindings\Factories\DiceFactory as Dice;
use Phenogram\Bindings\Factories\GameFactory as Game;
use Phenogram\Bindings\Factories\GiveawayFactory as Giveaway;
use Phenogram\Bindings\Factories\InvoiceFactory as Invoice;
use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Factories\PollFactory as Poll;
use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Factories\StoryFactory as Story;
use Phenogram\Bindings\Factories\VenueFactory as Venue;
use Phenogram\Bindings\Factories\VideoFactory as Video;
use Phenogram\Bindings\Factories\VoiceFactory as Voice;
use Phenogram\Bindings\Types\ExternalReplyInfo;
use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\ExternalReplyInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GameInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\Interfaces\VideoNoteInterface;
use Phenogram\Bindings\Types\Interfaces\VoiceInterface;

class ExternalReplyInfoFactory extends AbstractFactory
{
    /**
     * Creates a new ExternalReplyInfo instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\MessageOriginInterface|null $origin             Optional. Origin of the message replied to by the given message
     * @param ChatInterface|null                                               $chat               Optional. Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @param int|null                                                         $messageId          Optional. Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     * @param LinkPreviewOptionsInterface|null                                 $linkPreviewOptions Optional. Optional. Options used for link preview generation for the original message, if it is a text message
     * @param AnimationInterface|null                                          $animation          Optional. Optional. Message is an animation, information about the animation
     * @param AudioInterface|null                                              $audio              Optional. Optional. Message is an audio file, information about the file
     * @param DocumentInterface|null                                           $document           Optional. Optional. Message is a general file, information about the file
     * @param PaidMediaInfoInterface|null                                      $paidMedia          Optional. Optional. Message contains paid media; information about the paid media
     * @param array|null                                                       $photo              Optional. Optional. Message is a photo, available sizes of the photo
     * @param StickerInterface|null                                            $sticker            Optional. Optional. Message is a sticker, information about the sticker
     * @param StoryInterface|null                                              $story              Optional. Optional. Message is a forwarded story
     * @param VideoInterface|null                                              $video              Optional. Optional. Message is a video, information about the video
     * @param VideoNoteInterface|null                                          $videoNote          Optional. Optional. Message is a video note, information about the video message
     * @param VoiceInterface|null                                              $voice              Optional. Optional. Message is a voice message, information about the file
     * @param bool|null                                                        $hasMediaSpoiler    Optional. Optional. True, if the message media is covered by a spoiler animation
     * @param ContactInterface|null                                            $contact            Optional. Optional. Message is a shared contact, information about the contact
     * @param DiceInterface|null                                               $dice               Optional. Optional. Message is a dice with random value
     * @param GameInterface|null                                               $game               Optional. Optional. Message is a game, information about the game. More about games »
     * @param GiveawayInterface|null                                           $giveaway           Optional. Optional. Message is a scheduled giveaway, information about the giveaway
     * @param GiveawayWinnersInterface|null                                    $giveawayWinners    Optional. Optional. A giveaway with public winners was completed
     * @param InvoiceInterface|null                                            $invoice            Optional. Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @param LocationInterface|null                                           $location           Optional. Optional. Message is a shared location, information about the location
     * @param PollInterface|null                                               $poll               Optional. Optional. Message is a native poll, information about the poll
     * @param VenueInterface|null                                              $venue              Optional. Optional. Message is a venue, information about the venue
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\MessageOriginInterface $origin = null,
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        ?AnimationInterface $animation = null,
        ?AudioInterface $audio = null,
        ?DocumentInterface $document = null,
        ?PaidMediaInfoInterface $paidMedia = null,
        ?array $photo = null,
        ?StickerInterface $sticker = null,
        ?StoryInterface $story = null,
        ?VideoInterface $video = null,
        ?VideoNoteInterface $videoNote = null,
        ?VoiceInterface $voice = null,
        ?bool $hasMediaSpoiler = null,
        ?ContactInterface $contact = null,
        ?DiceInterface $dice = null,
        ?GameInterface $game = null,
        ?GiveawayInterface $giveaway = null,
        ?GiveawayWinnersInterface $giveawayWinners = null,
        ?InvoiceInterface $invoice = null,
        ?LocationInterface $location = null,
        ?PollInterface $poll = null,
        ?VenueInterface $venue = null,
    ): ExternalReplyInfoInterface {
        return self::factory()->makeExternalReplyInfo(
            origin: $origin ?? '[Abstract type: MessageOrigin]',
            chat: $chat,
            messageId: $messageId,
            linkPreviewOptions: $linkPreviewOptions,
            animation: $animation,
            audio: $audio,
            document: $document,
            paidMedia: $paidMedia,
            photo: $photo,
            sticker: $sticker,
            story: $story,
            video: $video,
            videoNote: $videoNote,
            voice: $voice,
            hasMediaSpoiler: $hasMediaSpoiler,
            contact: $contact,
            dice: $dice,
            game: $game,
            giveaway: $giveaway,
            giveawayWinners: $giveawayWinners,
            invoice: $invoice,
            location: $location,
            poll: $poll,
            venue: $venue,
        );
    }
}
