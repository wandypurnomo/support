<?php


namespace Wandxx\Support\Traits;


trait HasLabel
{
    public static function label(int $id): string
    {
        return self::labels()[$id] ?? "-";
    }
}