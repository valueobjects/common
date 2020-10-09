<?php

namespace ValueObjects\Common;

abstract class AbstractValueObject
{
    public static function getValueObjectName(): string
    {
        return substr(strrchr(static::class, '\\'), 1);
    }
}
