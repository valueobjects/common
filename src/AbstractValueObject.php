<?php

namespace ValueObjects\Common;

abstract class AbstractValueObject
{
    protected $observerManager;

    public static function getValueObjectName(): string
    {
        return substr(strrchr(static::class, '\\'), 1);
    }

    public function __destruct()
    {
        $this->observer()->notify('destroy');
    }
}
