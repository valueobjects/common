<?php

namespace ValueObjects\Common;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable
{
    public static function getValueObjectName(): string;


    public function __toString(): string;
}
