<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
class InputFile implements Interfaces\InputFileInterface
{
    public function __construct(
        public string $filePath,
    ) {
    }
}
