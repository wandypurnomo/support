<?php


namespace Wandxx\Support\Traits;


use Illuminate\Database\Eloquent\Model;
use Wandxx\Support\Interfaces\DefaultRequestInterface;

trait StorableTrait
{
    public function store(array $data): Model
    {
        return $this->_model->newQuery()->create($data);
    }
}