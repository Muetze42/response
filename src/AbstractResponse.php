<?php

namespace NormanHuth\Response;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * Execute the given callback if there was a server or client error.
     */
    public function onError(callable $callback): static
    {
        if ($this->failed()) {
            $callback($this);
        }

        return $this;
    }

    /**
     * Throw an exception if a server or client error occurred and the given condition evaluates to true.
     */
    public function throwIf($condition): static
    {
        return value($condition, $this) ? $this->throw(func_get_args()[1] ?? null) : $this;
    }

    /**
     * Throw an exception if the response status code is a 4xx level code.
     */
    public function throwIfClientError(): static
    {
        return $this->clientError() ? $this->throw() : $this;
    }

    /**
     * Throw an exception if the response status code is a 5xx level code.
     */
    public function throwIfServerError(): static
    {
        return $this->serverError() ? $this->throw() : $this;
    }
}
