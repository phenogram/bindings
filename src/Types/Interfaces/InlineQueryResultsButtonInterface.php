<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a button to be shown above inline query results. You must use exactly one of the optional fields.
 */
interface InlineQueryResultsButtonInterface extends TypeInterface
{
    /** @var string $text Label text on the button */
    public string $text { set; get; }

    /** @var WebAppInfoInterface|null $webApp Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to switch back to the inline mode using the method switchInlineQuery inside the Web App. */
    public ?WebAppInfoInterface $webApp { set; get; }

    /** @var string|null $startParameter Optional. Deep-linking parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.Example: An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a switch_inline button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities. */
    public ?string $startParameter { set; get; }
}
