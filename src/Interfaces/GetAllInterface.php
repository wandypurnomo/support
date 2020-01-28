<?php


namespace Wandx\Support\Interfaces;


use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface GetAllInterface
{
    public function getAll(Request $request): LengthAwarePaginator;
}