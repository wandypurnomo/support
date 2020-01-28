<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface FindInterface
{
    public function find(string $id): Model;
}