<?php

namespace NormanHuth\Response;

interface ResponseInterface
{
    /**
     * Get the body of the response.
     *
     * @return string
     */
    public function body(): string;

    /**
     * Determine if the request was successful.
     */
    public function successful(): bool;

    /**
     * Determine if the response indicates a client or server error occurred.
     */
    public function failed(): bool;

    /**
     * Determine if the response indicates a client error occurred.
     */
    public function clientError(): bool;

    /**
     * Determine if the response indicates a server error occurred.
     */
    public function serverError(): bool;

    /**
     * Execute the given callback if there was a server or client error.
     */
    public function onError(callable $callback): static;

    /**
     * Throw an exception if a server or client error occurred.
     */
    public function throw(): static;

    /**
     * Throw an exception if a server or client error occurred and the given condition evaluates to true.
     */
    public function throwIf($condition): static;

    /**
     * Throw an exception if the response status code is a 4xx level code.
     */
    public function throwIfClientError(): static;

    /**
     * Throw an exception if the response status code is a 5xx level code.
     */
    public function throwIfServerError(): static;


    /**
     * Get the body of the response.
     */
    public function __toString(): string;
}
