<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a block in a rich formatted message. Currently, it can be any of the following types:
 *
 * @see RichBlockParagraph
 * @see RichBlockSectionHeading
 * @see RichBlockPreformatted
 * @see RichBlockFooter
 * @see RichBlockDivider
 * @see RichBlockMathematicalExpression
 * @see RichBlockAnchor
 * @see RichBlockList
 * @see RichBlockBlockQuotation
 * @see RichBlockExpandableBlockQuotation
 * @see RichBlockPullQuotation
 * @see RichBlockCollage
 * @see RichBlockSlideshow
 * @see RichBlockTable
 * @see RichBlockDetails
 * @see RichBlockMap
 * @see RichBlockButtons
 * @see RichBlockAnimation
 * @see RichBlockAudio
 * @see RichBlockDocument
 * @see RichBlockPhoto
 * @see RichBlockVideo
 * @see RichBlockVoiceNote
 * @see RichBlockThinking
 */
abstract class RichBlock implements Interfaces\RichBlockInterface
{
}
