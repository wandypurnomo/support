<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface StorableInterface
{
    public function store(array $data): Model;
}