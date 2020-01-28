<?php


namespace Wandx\Support\Interfaces;


interface ConstantInterface
{
    public function label(int $id): string;

    public function labels(): array;
}