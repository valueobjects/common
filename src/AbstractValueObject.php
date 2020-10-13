<?php

namespace ValueObjects\Common;

abstract class AbstractValueObject implements ValueObjectInterface
{
    public static function getValueObjectName(): string
    {
        return substr(strrchr(static::class, '\\'), 1);
    }
}
