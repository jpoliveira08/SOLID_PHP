<?php

declare(strict_types=1);

class UserRequest
{
    protected static array $rules = [
        'name' => 'string',
        'email' => 'string',
    ];

    public static function validate($data): void
    {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) === $type) {
                throw new \Exception("Property '{$property}' must be of type '{$type}'.");
            }
        }
    }
}