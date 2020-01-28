<?php


namespace Wandxx\Support\Traits;


use Illuminate\Database\Eloquent\Model;
use Wandxx\Support\Interfaces\DefaultRequestInterface;

trait UpdateableTrait
{
    public function update(DefaultRequestInterface $request, string $id): Model
    {
        $model = $this->_model->newQuery()->findOrFail($id);
        $model->update($request->data());
        return $model;
    }
}