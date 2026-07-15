<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a “Thinking…” placeholder, corresponding to the custom HTML tag <tg-thinking>. The block may be used only in sendRichMessageDraft, therefore it can't be received in messages. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
 */
interface RichBlockThinkingInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “thinking” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block. */
    public RichTextInterface $text { set; get; }
}
