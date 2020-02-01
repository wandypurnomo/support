<?php


namespace Wandxx\Support\Interfaces;


interface ConstantInterface
{
    public static function label(int $id): string;

    public static function labels(): array;
}