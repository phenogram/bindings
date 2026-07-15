<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of RichText, or any of the following types:
 *
 * @see RichTextBoldInterface
 * @see RichTextItalicInterface
 * @see RichTextUnderlineInterface
 * @see RichTextStrikethroughInterface
 * @see RichTextSpoilerInterface
 * @see RichTextDateTimeInterface
 * @see RichTextTextMentionInterface
 * @see RichTextSubscriptInterface
 * @see RichTextSuperscriptInterface
 * @see RichTextMarkedInterface
 * @see RichTextCodeInterface
 * @see RichTextCustomEmojiInterface
 * @see RichTextMathematicalExpressionInterface
 * @see RichTextUrlInterface
 * @see RichTextEmailAddressInterface
 * @see RichTextPhoneNumberInterface
 * @see RichTextBankCardNumberInterface
 * @see RichTextMentionInterface
 * @see RichTextHashtagInterface
 * @see RichTextCashtagInterface
 * @see RichTextBotCommandInterface
 * @see RichTextAnchorInterface
 * @see RichTextAnchorLinkInterface
 * @see RichTextReferenceInterface
 * @see RichTextReferenceLinkInterface
 */
interface RichTextInterface extends TypeInterface
{
}
