<?php

namespace ValueObjects\Common\Observers;

use SplObjectStorage;

abstract class AbstractValueObjectObserverManager
{
    protected SplObjectStorage $observers;
    protected array $notifying = [];

    public function detachAll(): void
    {
        foreach ($this->observers as $observer) {
            $this->observers->detach($observer);
        }
    }

    public function getObservers(): SplObjectStorage
    {
        return $this->observers;
    }

    public function notify(string $event): void
    {
        if (isset($this->notifying[$event])) {
            return;
        }

        $this->notifying[$event] = null;
        try {
            foreach ($this->observers as $observer) {
                $this->fire($observer, $event);
            }
        } finally {
            unset($this->notifying[$event]);
        }
    }
}
