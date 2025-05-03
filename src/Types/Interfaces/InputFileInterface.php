<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
interface InputFileInterface extends TypeInterface
{
    /**
     * Reads data from the file as a stream until it's empty.
     *
     * @return string|null returns a string when new data is available or `null` if the stream has closed
     */
    public function readData(): ?string;
}
