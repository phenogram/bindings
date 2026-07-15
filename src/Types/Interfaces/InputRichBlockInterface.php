<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a block in a rich formatted message to be sent. Currently, it can be any of the following types:
 *
 * @see InputRichBlockParagraphInterface
 * @see InputRichBlockSectionHeadingInterface
 * @see InputRichBlockPreformattedInterface
 * @see InputRichBlockFooterInterface
 * @see InputRichBlockDividerInterface
 * @see InputRichBlockMathematicalExpressionInterface
 * @see InputRichBlockAnchorInterface
 * @see InputRichBlockListInterface
 * @see InputRichBlockBlockQuotationInterface
 * @see InputRichBlockPullQuotationInterface
 * @see InputRichBlockCollageInterface
 * @see InputRichBlockSlideshowInterface
 * @see InputRichBlockTableInterface
 * @see InputRichBlockDetailsInterface
 * @see InputRichBlockMapInterface
 * @see InputRichBlockAnimationInterface
 * @see InputRichBlockAudioInterface
 * @see InputRichBlockPhotoInterface
 * @see InputRichBlockVideoInterface
 * @see InputRichBlockVoiceNoteInterface
 * @see InputRichBlockThinkingInterface
 */
interface InputRichBlockInterface extends TypeInterface
{
}
