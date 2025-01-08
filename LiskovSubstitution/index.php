<?php

declare(strict_types=1);

interface FieldRepositoryInterface
{
    public function all(): array;
}

class DatabaseRepository implements FieldRepositoryInterface
{
    public function all(): array
    {
        //Load fields from a database
        return ['fields' => $fields];
    }
}

class FileSystemRepositoryInterface implements FieldRepositoryInterface
{
    public function all()
    {
        // Load fields from the filesystem

        return $fields;
    }
}