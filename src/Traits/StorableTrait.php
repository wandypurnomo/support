<?php


namespace Wandxx\Support\Traits;


use Illuminate\Database\Eloquent\Model;
use Wandxx\Support\Interfaces\DefaultRequestInterface;

trait StorableTrait
{
    public function store(DefaultRequestInterface $request): Model
    {
        return $this->_model->newQuery()->create($request->data());
    }
}