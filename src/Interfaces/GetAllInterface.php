<?php


namespace Wandxx\Support\Interfaces;


use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface GetAllInterface
{
    public function getAll(Request $request,?string $userId): LengthAwarePaginator;
}