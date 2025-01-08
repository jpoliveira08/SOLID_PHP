<?php

declare(strict_types=1);

class Json
{
    public static function from(array $data): string|false
    {
        return json_encode($data);
    }
}