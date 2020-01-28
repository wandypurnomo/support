<?php


namespace Wandxx\Support\Traits;


trait HasLabel
{
    public function label(int $id): string
    {
        return self::labels()[$id] ?? "-";
    }
}