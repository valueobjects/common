<?php

namespace ValueObjects\Common\Contracts\Observers;

use SplObjectStorage;

interface ValueObjectObserverManagerInterface
{
    public function detachAll(): void;

    public function getObservers(): SplObjectStorage;

    public function notify(string $event): void;
}
