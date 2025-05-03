<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes data sent from a Web App to the bot.
 */
interface WebAppDataInterface extends TypeInterface
{
    /** @var string $data The data. Be aware that a bad client can send arbitrary data in this field. */
    public string $data { set; get; }

    /** @var string $buttonText Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field. */
    public string $buttonText { set; get; }
}
