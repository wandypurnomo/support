<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface UpdateableInterface
{
    public function update(array $data, string $id): Model;
}