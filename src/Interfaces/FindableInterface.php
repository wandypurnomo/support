<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface FindableInterface
{
    public function find(string $id): Model;
}