<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A block with a “Thinking…” placeholder, corresponding to the custom HTML tag <tg-thinking>. The block may be used only in sendRichMessageDraft, therefore it can't be received in messages. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
 */
class InputRichBlockThinking extends InputRichBlock implements Interfaces\InputRichBlockThinkingInterface
{
    /**
     * @param string            $type Type of the block, always “thinking”
     * @param RichTextInterface $text Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
    ) {
    }
}
