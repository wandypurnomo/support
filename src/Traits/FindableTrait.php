<?php


namespace Wandxx\Support\Traits;


use Illuminate\Database\Eloquent\Model;

trait FindableTrait
{
    public function find(string $id): Model
    {
        return $this->_model->newQuery()->findOrFail($id);
    }
}