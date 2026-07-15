<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a block in a rich formatted message. Currently, it can be any of the following types:
 *
 * @see RichBlockParagraphInterface
 * @see RichBlockSectionHeadingInterface
 * @see RichBlockPreformattedInterface
 * @see RichBlockFooterInterface
 * @see RichBlockDividerInterface
 * @see RichBlockMathematicalExpressionInterface
 * @see RichBlockAnchorInterface
 * @see RichBlockListInterface
 * @see RichBlockBlockQuotationInterface
 * @see RichBlockPullQuotationInterface
 * @see RichBlockCollageInterface
 * @see RichBlockSlideshowInterface
 * @see RichBlockTableInterface
 * @see RichBlockDetailsInterface
 * @see RichBlockMapInterface
 * @see RichBlockAnimationInterface
 * @see RichBlockAudioInterface
 * @see RichBlockPhotoInterface
 * @see RichBlockVideoInterface
 * @see RichBlockVoiceNoteInterface
 * @see RichBlockThinkingInterface
 */
interface RichBlockInterface extends TypeInterface
{
}
