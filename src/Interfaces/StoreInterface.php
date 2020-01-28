<?php


namespace Wandx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface StoreInterface
{
    public function store(DefaultRequestInterface $request): Model;
}