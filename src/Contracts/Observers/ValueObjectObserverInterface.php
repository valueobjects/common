<?php

namespace ValueObjects\Common\Contracts\Observers;

interface ValueObjectObserverInterface
{
    public function notify(string $event): void;
}
