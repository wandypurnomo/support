<?php


namespace Wandxx\Support\Interfaces;


interface DeletableInterface
{
    public function delete(string $id): void;
}