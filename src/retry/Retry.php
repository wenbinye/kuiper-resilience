<?php

declare(strict_types=1);

namespace kuiper\resilience\retry;

interface Retry
{
    public function decorate(callable $call): callable;

    /**
     * @param mixed ...$args
     *
     * @return mixed
     */
    public function call(callable $call, ...$args);

    public function reset(): void;

    public function getMetrics(): RetryMetrics;
}
