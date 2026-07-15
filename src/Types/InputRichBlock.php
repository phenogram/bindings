<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a block in a rich formatted message to be sent. Currently, it can be any of the following types:
 *
 * @see InputRichBlockParagraph
 * @see InputRichBlockSectionHeading
 * @see InputRichBlockPreformatted
 * @see InputRichBlockFooter
 * @see InputRichBlockDivider
 * @see InputRichBlockMathematicalExpression
 * @see InputRichBlockAnchor
 * @see InputRichBlockList
 * @see InputRichBlockBlockQuotation
 * @see InputRichBlockPullQuotation
 * @see InputRichBlockCollage
 * @see InputRichBlockSlideshow
 * @see InputRichBlockTable
 * @see InputRichBlockDetails
 * @see InputRichBlockMap
 * @see InputRichBlockAnimation
 * @see InputRichBlockAudio
 * @see InputRichBlockPhoto
 * @see InputRichBlockVideo
 * @see InputRichBlockVoiceNote
 * @see InputRichBlockThinking
 */
abstract class InputRichBlock implements Interfaces\InputRichBlockInterface
{
}
