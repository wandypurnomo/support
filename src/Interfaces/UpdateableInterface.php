<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface UpdateableInterface
{
    public function update(DefaultRequestInterface $request, string $id): Model;
}