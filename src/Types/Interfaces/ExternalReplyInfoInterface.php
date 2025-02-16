<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
interface ExternalReplyInfoInterface extends TypeInterface
{
    /** @var MessageOriginInterface $origin Origin of the message replied to by the given message */
    public MessageOriginInterface $origin { set; }

    /** @var ChatInterface|null $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel. */
    public ?ChatInterface $chat { set; }

    /** @var int|null $messageId Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel. */
    public ?int $messageId { set; }

    /** @var LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Options used for link preview generation for the original message, if it is a text message */
    public ?LinkPreviewOptionsInterface $linkPreviewOptions { set; }

    /** @var AnimationInterface|null $animation Optional. Message is an animation, information about the animation */
    public ?AnimationInterface $animation { set; }

    /** @var AudioInterface|null $audio Optional. Message is an audio file, information about the file */
    public ?AudioInterface $audio { set; }

    /** @var DocumentInterface|null $document Optional. Message is a general file, information about the file */
    public ?DocumentInterface $document { set; }

    /** @var PaidMediaInfoInterface|null $paidMedia Optional. Message contains paid media; information about the paid media */
    public ?PaidMediaInfoInterface $paidMedia { set; }

    /** @var array<PhotoSizeInterface>|null $photo Optional. Message is a photo, available sizes of the photo */
    public ?array $photo { set; }

    /** @var StickerInterface|null $sticker Optional. Message is a sticker, information about the sticker */
    public ?StickerInterface $sticker { set; }

    /** @var StoryInterface|null $story Optional. Message is a forwarded story */
    public ?StoryInterface $story { set; }

    /** @var VideoInterface|null $video Optional. Message is a video, information about the video */
    public ?VideoInterface $video { set; }

    /** @var VideoNoteInterface|null $videoNote Optional. Message is a video note, information about the video message */
    public ?VideoNoteInterface $videoNote { set; }

    /** @var VoiceInterface|null $voice Optional. Message is a voice message, information about the file */
    public ?VoiceInterface $voice { set; }

    /** @var bool|null $hasMediaSpoiler Optional. True, if the message media is covered by a spoiler animation */
    public ?bool $hasMediaSpoiler { set; }

    /** @var ContactInterface|null $contact Optional. Message is a shared contact, information about the contact */
    public ?ContactInterface $contact { set; }

    /** @var DiceInterface|null $dice Optional. Message is a dice with random value */
    public ?DiceInterface $dice { set; }

    /** @var GameInterface|null $game Optional. Message is a game, information about the game. More about games » */
    public ?GameInterface $game { set; }

    /** @var GiveawayInterface|null $giveaway Optional. Message is a scheduled giveaway, information about the giveaway */
    public ?GiveawayInterface $giveaway { set; }

    /** @var GiveawayWinnersInterface|null $giveawayWinners Optional. A giveaway with public winners was completed */
    public ?GiveawayWinnersInterface $giveawayWinners { set; }

    /** @var InvoiceInterface|null $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments » */
    public ?InvoiceInterface $invoice { set; }

    /** @var LocationInterface|null $location Optional. Message is a shared location, information about the location */
    public ?LocationInterface $location { set; }

    /** @var PollInterface|null $poll Optional. Message is a native poll, information about the poll */
    public ?PollInterface $poll { set; }

    /** @var VenueInterface|null $venue Optional. Message is a venue, information about the venue */
    public ?VenueInterface $venue { set; }
}
