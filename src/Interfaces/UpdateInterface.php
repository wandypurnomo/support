<?php


namespace Wandx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface UpdateInterface
{
    public function update(DefaultRequestInterface $request, string $id): Model;
}