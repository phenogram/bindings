<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The response contains a JSON object, which always has a Boolean field 'ok' and may
 * have an optional String field 'description' with a human-readable description
 * of the result.
 *
 * If 'ok' equals True, the request was successful and the result of the query
 * can be found in the 'result' field. In case of an unsuccessful request,
 * 'ok' equals false and the error is explained in the 'description'.
 *
 * An Integer 'error_code' field is also returned, but its contents are subject to change in the future.
 * Some errors may also have an optional field 'parameters' of the type ResponseParameters,
 * which can help to automatically handle the error.
 */
interface ResponseInterface extends TypeInterface
{
    public bool $ok { set; get; }
    public mixed $result { set; get; }
    public ?int $errorCode { set; get; }
    public ?string $description { set; get; }
    public ?ResponseParametersInterface $parameters { set; get; }
}
