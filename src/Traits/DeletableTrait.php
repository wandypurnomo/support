<?php


namespace Wandxx\Support\Traits;


trait DeletableTrait
{
    public function delete(string $id): void
    {
        $this->_model->newQuery()->findOrFail($id)->delete();
    }
}