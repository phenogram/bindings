<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistInterface;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\GameInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\Interfaces\VideoNoteInterface;
use Phenogram\Bindings\Types\Interfaces\VoiceInterface;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
class ExternalReplyInfo implements Interfaces\ExternalReplyInfoInterface
{
    /**
     * @param MessageOriginInterface           $origin             Origin of the message replied to by the given message
     * @param ChatInterface|null               $chat               Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @param int|null                         $messageId          Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     * @param LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Options used for link preview generation for the original message, if it is a text message
     * @param AnimationInterface|null          $animation          Optional. Message is an animation, information about the animation
     * @param AudioInterface|null              $audio              Optional. Message is an audio file, information about the file
     * @param DocumentInterface|null           $document           Optional. Message is a general file, information about the file
     * @param PaidMediaInfoInterface|null      $paidMedia          Optional. Message contains paid media; information about the paid media
     * @param array<PhotoSizeInterface>|null   $photo              Optional. Message is a photo, available sizes of the photo
     * @param StickerInterface|null            $sticker            Optional. Message is a sticker, information about the sticker
     * @param StoryInterface|null              $story              Optional. Message is a forwarded story
     * @param VideoInterface|null              $video              Optional. Message is a video, information about the video
     * @param VideoNoteInterface|null          $videoNote          Optional. Message is a video note, information about the video message
     * @param VoiceInterface|null              $voice              Optional. Message is a voice message, information about the file
     * @param bool|null                        $hasMediaSpoiler    Optional. True, if the message media is covered by a spoiler animation
     * @param ChecklistInterface|null          $checklist          Optional. Message is a checklist
     * @param ContactInterface|null            $contact            Optional. Message is a shared contact, information about the contact
     * @param DiceInterface|null               $dice               Optional. Message is a dice with random value
     * @param GameInterface|null               $game               Optional. Message is a game, information about the game. More about games »
     * @param GiveawayInterface|null           $giveaway           Optional. Message is a scheduled giveaway, information about the giveaway
     * @param GiveawayWinnersInterface|null    $giveawayWinners    Optional. A giveaway with public winners was completed
     * @param InvoiceInterface|null            $invoice            Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @param LocationInterface|null           $location           Optional. Message is a shared location, information about the location
     * @param PollInterface|null               $poll               Optional. Message is a native poll, information about the poll
     * @param VenueInterface|null              $venue              Optional. Message is a venue, information about the venue
     */
    public function __construct(
        public MessageOriginInterface $origin,
        public ?ChatInterface $chat = null,
        public ?int $messageId = null,
        public ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        public ?AnimationInterface $animation = null,
        public ?AudioInterface $audio = null,
        public ?DocumentInterface $document = null,
        public ?PaidMediaInfoInterface $paidMedia = null,
        public ?array $photo = null,
        public ?StickerInterface $sticker = null,
        public ?StoryInterface $story = null,
        public ?VideoInterface $video = null,
        public ?VideoNoteInterface $videoNote = null,
        public ?VoiceInterface $voice = null,
        public ?bool $hasMediaSpoiler = null,
        public ?ChecklistInterface $checklist = null,
        public ?ContactInterface $contact = null,
        public ?DiceInterface $dice = null,
        public ?GameInterface $game = null,
        public ?GiveawayInterface $giveaway = null,
        public ?GiveawayWinnersInterface $giveawayWinners = null,
        public ?InvoiceInterface $invoice = null,
        public ?LocationInterface $location = null,
        public ?PollInterface $poll = null,
        public ?VenueInterface $venue = null,
    ) {
    }
}
